<?php

declare(strict_types=1);

namespace iggyvolz\html\Element;

/**
 * @autogenerated
 * Hyperlink
 * @see https://html.spec.whatwg.org/#the-a-element
 * Categories: flow,phrasing,interactive,palpable
 * Parents: phrasing
 * Children: transparent
 * Attributes: globals,href,target,download,ping,rel,hreflang,type,referrerpolicy
 */
class AnchorElement extends \iggyvolz\html\Element
{
    public const ELEMENT_NAME = 'a';

    /**
     * @param list<\iggyvolz\html\Element|string> $children
     */
    public function __construct(
        array $children,
        ?string $accesskey = null,
        ?string $autocapitalize = null,
        ?string $autofocus = null,
        ?string $contenteditable = null,
        ?string $dir = null,
        ?string $draggable = null,
        ?string $enterkeyhint = null,
        ?string $hidden = null,
        ?string $inputmode = null,
        ?string $is = null,
        ?string $itemid = null,
        ?string $itemprop = null,
        ?string $itemref = null,
        ?string $itemscope = null,
        ?string $itemtype = null,
        ?string $lang = null,
        ?string $nonce = null,
        ?string $spellcheck = null,
        ?string $style = null,
        ?string $tabindex = null,
        ?string $title = null,
        ?string $translate = null,
        ?string $class = null,
        ?string $id = null,
        ?string $slot = null,
        ?string $href = null,
        ?string $target = null,
        ?string $download = null,
        ?string $ping = null,
        ?string $rel = null,
        ?string $hreflang = null,
        ?string $type = null,
        ?string $referrerpolicy = null
    ) {
        $attributes = \array_filter([
            'accesskey' => $accesskey,
            'autocapitalize' => $autocapitalize,
            'autofocus' => $autofocus,
            'contenteditable' => $contenteditable,
            'dir' => $dir,
            'draggable' => $draggable,
            'enterkeyhint' => $enterkeyhint,
            'hidden' => $hidden,
            'inputmode' => $inputmode,
            'is' => $is,
            'itemid' => $itemid,
            'itemprop' => $itemprop,
            'itemref' => $itemref,
            'itemscope' => $itemscope,
            'itemtype' => $itemtype,
            'lang' => $lang,
            'nonce' => $nonce,
            'spellcheck' => $spellcheck,
            'style' => $style,
            'tabindex' => $tabindex,
            'title' => $title,
            'translate' => $translate,
            'class' => $class,
            'id' => $id,
            'slot' => $slot,
            'href' => $href,
            'target' => $target,
            'download' => $download,
            'ping' => $ping,
            'rel' => $rel,
            'hreflang' => $hreflang,
            'type' => $type,
            'referrerpolicy' => $referrerpolicy,
        ], fn(?string $s) => !is_null($s));
        parent::__construct(self::ELEMENT_NAME, $attributes, $children);
    }
}
