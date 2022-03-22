<?php

declare(strict_types=1);

namespace iggyvolz\html\Element;

/**
 * @autogenerated
 * Video player
 * @see https://html.spec.whatwg.org/#the-video-element
 * Categories: flow,phrasing,embedded,interactive,palpable
 * Parents: phrasing
 * Children: source,track,transparent
 * Attributes: globals,src,crossorigin,poster,preload,autoplay,playsinline,loop,muted,controls,width,height
 */
class VideoElement extends \iggyvolz\html\Element
{
    public const ELEMENT_NAME = 'video';

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
        ?string $src = null,
        ?string $crossorigin = null,
        ?string $poster = null,
        ?string $preload = null,
        ?string $autoplay = null,
        ?string $playsinline = null,
        ?string $loop = null,
        ?string $muted = null,
        ?string $controls = null,
        ?string $width = null,
        ?string $height = null
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
            'crossorigin' => $crossorigin,
            'poster' => $poster,
            'preload' => $preload,
            'autoplay' => $autoplay,
            'playsinline' => $playsinline,
            'loop' => $loop,
            'muted' => $muted,
            'controls' => $controls,
            'width' => $width,
            'height' => $height,
        ], fn(?string $s) => !is_null($s));
        parent::__construct(self::ELEMENT_NAME, $attributes, $children);
    }
}
