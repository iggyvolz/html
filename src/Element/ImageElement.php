<?php

declare(strict_types=1);

namespace iggyvolz\html\Element;

/**
 * @autogenerated
 * Image
 * @see https://html.spec.whatwg.org/#the-img-element
 * Categories: flow,phrasing,embedded,interactive,form-associated,palpable
 * Parents: phrasing,picture
 * Children:
 * Attributes: globals,alt,src,srcset,sizes,crossorigin,usemap,ismap,width,height,referrerpolicy,decoding,loading
 */
class ImageElement extends \iggyvolz\html\Element
{
    use \iggyvolz\html\VoidElement;

    public const ELEMENT_NAME = 'img';

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
        ?string $slot = null,
        ?string $alt = null,
        ?string $src = null,
        ?string $srcset = null,
        ?string $sizes = null,
        ?string $crossorigin = null,
        ?string $usemap = null,
        ?string $ismap = null,
        ?string $width = null,
        ?string $height = null,
        ?string $referrerpolicy = null,
        ?string $decoding = null,
        ?string $loading = null
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
            'alt' => $alt,
            'src' => $src,
            'srcset' => $srcset,
            'sizes' => $sizes,
            'crossorigin' => $crossorigin,
            'usemap' => $usemap,
            'ismap' => $ismap,
            'width' => $width,
            'height' => $height,
            'referrerpolicy' => $referrerpolicy,
            'decoding' => $decoding,
            'loading' => $loading,
        ], fn(?string $s) => !is_null($s));
        parent::__construct(self::ELEMENT_NAME, $attributes, $children);
    }
}
