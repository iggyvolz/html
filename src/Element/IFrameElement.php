<?php

declare(strict_types=1);

namespace iggyvolz\html\Element;

/**
 * @autogenerated
 * Nested browsing context
 * @see https://html.spec.whatwg.org/#the-iframe-element
 * Categories: flow,phrasing,embedded,interactive,palpable
 * Parents: phrasing
 * Children:
 * Attributes: globals,src,srcdoc,name,sandbox,allow,allowfullscreen,width,height,referrerpolicy,loading
 */
class IFrameElement extends \iggyvolz\html\Element
{
    public const ELEMENT_NAME = 'iframe';

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
        ?string $src = null,
        ?string $srcdoc = null,
        ?string $name = null,
        ?string $sandbox = null,
        ?string $allow = null,
        ?string $allowfullscreen = null,
        ?string $width = null,
        ?string $height = null,
        ?string $referrerpolicy = null,
        ?string $loading = null
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
            'src' => $src,
            'srcdoc' => $srcdoc,
            'name' => $name,
            'sandbox' => $sandbox,
            'allow' => $allow,
            'allowfullscreen' => $allowfullscreen,
            'width' => $width,
            'height' => $height,
            'referrerpolicy' => $referrerpolicy,
            'loading' => $loading,
        ], fn(?string $s) => !is_null($s));
        parent::__construct(self::ELEMENT_NAME, $attributes, $children);
    }
}
