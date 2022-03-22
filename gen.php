<?php
// Generate element classes from https://html.spec.whatwg.org/#toc-semantics
// Inspired from https://github.com/tawesoft/html5spec/blob/master/parse.py
use iggyvolz\html\Element;
use iggyvolz\html\EscapableRawTextElement;
use iggyvolz\html\RawTextElement;
use iggyvolz\html\VoidElement;

require_once __DIR__ . "/vendor/autoload.php";
if(!file_exists(__DIR__ . "/spec.html")) copy("https://html.spec.whatwg.org/#", __DIR__ . "/spec.html");
libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTMLFile(__DIR__ . "/spec.html");
$version = explode("Last Updated ", $dom->getElementById("living-standard")->textContent)[1];
[$d,$m,$y] = explode(" ", $version);
$d = intval($d);
$y = intval($y);
$m = match($m) {
    "January" => 1,
    "February" => 2,
    "March" => 3,
    "April" => 4,
    "May" => 5,
    "June" => 6,
    "July" => 7,
    "August" => 8,
    "September" => 9,
    "October" => 10,
    "November" => 11,
    "December" => 12
};
$version = $d + (100 * $m) + (10000 * $y);
echo "Version: $version\n";
$voidElements = array_map(trim(...), explode(",", $dom->getElementById("void-elements")->parentNode->nextElementSibling->textContent));
$escapableRawTextElements = array_map(trim(...), explode(",", $dom->getElementById("escapable-raw-text-elements")->parentNode->nextElementSibling->textContent));
$rawTextElements = array_map(trim(...), explode(",", $dom->getElementById("raw-text-elements")->parentNode->nextElementSibling->textContent));
$rows = iterator_to_array(iterator_to_array($dom->getElementById("elements-3")->nextElementSibling->nextElementSibling->getElementsByTagName("tbody"))[0]->getElementsByTagName("tr"));
$globalAttributes = [...array_map(trim(...), array_map(fn(DOMElement $x) => $x->textContent, iterator_to_array($dom->getElementById("global-attributes")->nextElementSibling->nextElementSibling->nextElementSibling->childNodes))), "class", "id", "slot"];
/** @var DOMElement[] $rows */
foreach($rows as $row) {
    /** @var DOMElement[] $childNodes */
    $childNodes = iterator_to_array($row->childNodes);
    $childNodes = array_map(fn(DOMElement $element): string => $element->textContent, $childNodes);
    [$element, $description, $categories, $parents, $children, $attributes, $interface] = $childNodes;
    foreach ([&$categories, &$parents, &$children, &$attributes] as &$list) {
        $list = str_replace("*", "", $list);
        if ($list === "none" || $list === "empty") {
            $list = [];
        } else {
            $list = array_map(trim(...), explode(";", $list));
        }
    }
    if (str_contains($element, " ")) continue;
    foreach (explode(",", $element) as $element) {
        $name = $interface === "HTMLElement" ? ucfirst($element) . "Element" : substr($interface, strlen("HTML"));
        $phpFile = new \Nette\PhpGenerator\PhpFile();
        $class = $phpFile->setStrictTypes()->addNamespace("iggyvolz\\html\\Element")->addClass($name);
        $class->addComment("@autogenerated");
        $class->addComment($description);
        $class->addComment("@see https://html.spec.whatwg.org/#the-$element-element");
        $constructor = $class->addMethod("__construct");
        $class->setExtends(Element::class);
        $class->addConstant("ELEMENT_NAME", $element);
        if(in_array($element, $voidElements)) {
            $class->addTrait(VoidElement::class);
            $constructor->addBody("\$children = [];");
        } elseif(in_array($element, $rawTextElements)) {
            $class->addTrait(RawTextElement::class);
            $constructor->addParameter("contents")->setType("string");
            $constructor->addBody("\$this->contents = \$contents;");
            $constructor->addBody("\$children = [];");
        } elseif(in_array($element, $escapableRawTextElements)) {
            $class->addTrait(EscapableRawTextElement::class);
            $constructor->addParameter("contents")->setType("string");
            $constructor->addBody("\$this->contents = \$contents;");
            $constructor->addBody("\$children = [];");
        } elseif(!empty($children)) {
            $childrenParam = $constructor->addParameter("children")->setType("array");
//            TODO type validation
//            $childClasses = array_map(function(string $elementOrCategory) use ($element, $categoriesOfElements, $elementClassNames): string {
//                // Clean up the mess of naming conventions here
//                if(str_ends_with($elementOrCategory, " elements")) $elementOrCategory = substr($elementOrCategory, 0, -strlen(" elements"));
//                if(str_ends_with($elementOrCategory, " content")) $elementOrCategory = substr($elementOrCategory, 0, -strlen(" content"));
//                if(str_starts_with($elementOrCategory, "one ")) $elementOrCategory = substr($elementOrCategory, strlen("one "));
//                if(array_key_exists($elementOrCategory, $categoriesOfElements)) {
//                    return "x";
//                } elseif(array_key_exists($elementOrCategory, $elementClassNames)) {
//                    return "\\iggyvolz\\html\\$elementClassNames[$elementOrCategory]";
//                } elseif($elementOrCategory === "transparent") {
//                    // TODO somehow validate from parent
//                    return "\\" . Element::class;
//                } elseif($elementOrCategory === "varies") {
//                    return "\\" . Element::class;
//                } elseif($elementOrCategory === "text") {
//                    return "string";
//                }
//                throw new InvalidArgumentException();
//            }, $children);
            $constructor->addComment("@param list<\\".Element::class."|string> \$children");
        }
        $constructor->addBody("\$attributes = \\array_filter([");
        foreach ($attributes as $attribute_) {
            foreach($attribute_ === "globals" ? $globalAttributes : [$attribute_] as $attribute) {
                $attributeVarName = preg_replace_callback("/-(.)/", fn(array $x) => strtoupper($x[1]), $attribute);
                $constructor->addParameter($attributeVarName)->setType("?string")->setDefaultValue(null);
                $constructor->addBody("\t" . var_export($attribute, true) . " => \$$attributeVarName,");
            }
        }
        $constructor->addBody("], fn(?string \$s) => !is_null(\$s));");
        $constructor->addBody("parent::__construct(self::ELEMENT_NAME, \$attributes, \$children);");
        $class->addComment("Categories: " . implode(",", $categories));
        $class->addComment("Parents: " . implode(",", $parents));
        $class->addComment("Children: " . implode(",", $children));
        $class->addComment("Attributes: " . implode(",", $attributes));
        file_put_contents(__DIR__ . "/src/Element/$name.php", (new \Nette\PhpGenerator\PsrPrinter())->printFile($phpFile));
    }
}
