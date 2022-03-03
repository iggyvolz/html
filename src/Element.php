<?php

namespace iggyvolz\html;

abstract class Element implements \Stringable
{
    /**
     * @param array<string,string> $attributes
     * @param list<Element|string> $children
     */
    protected function __construct(
        public readonly string $name,
        public readonly array $attributes,
        public readonly array $children,
    )
    {
        if(!preg_match("/^[a-zA-Z0-9]+$/", $name)) {
            throw new \InvalidArgumentException();
        }
        // TODO validate name and attributes as valid, escape value
//        foreach($this->attributes as $key => $value) {
//            if(!mb_ereg_match("/"))
//            if(!preg_match("/^[\x00-\x1f\x7f-\x9f\x20\x22\x27\x3e\x2f\x3d\xfdd0]+$/", $key)) {
//
//            }
//        }
    }
    public function __toString(): string
    {
        // https://html.spec.whatwg.org/multipage/syntax.html#start-tags - exclude void elements
        return $this->openTag() . $this->innerHtml() . $this->closeTag();
    }

    protected function innerHtml(): string
    {
        return implode("", $this->children);
    }

    protected function openTag(): string
    {
        return "<$this->name" . implode("", array_map(fn(string $value, string $key): string => " $key=\"$value\"", $this->attributes, array_keys($this->attributes))) . ">";
    }

    protected function closeTag(): string
    {
        return "</$this->name>";
    }
}