<?php

declare(strict_types=1);

namespace iggyvolz\html\Element;

/**
 * @autogenerated
 * Line break, e.g. in poem or postal address
 * @see https://html.spec.whatwg.org/#the-br-element
 * Categories: flow,phrasing
 * Parents: phrasing
 * Children:
 * Attributes: globals
 */
final class BRElement extends \iggyvolz\html\Element
{
    use \iggyvolz\html\VoidElement;

    public const ELEMENT_NAME = 'br';

    public function __construct(
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
        ?string $slot = null
    ) {
        $children = [];
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
        ], fn(?string $s) => !is_null($s));
        parent::__construct(self::ELEMENT_NAME, $attributes, $children);
    }
}
