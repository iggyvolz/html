<?php

declare(strict_types=1);

namespace iggyvolz\html\Element;

/**
 * @autogenerated
 * Group of form controls
 * @see https://html.spec.whatwg.org/#the-fieldset-element
 * Categories: flow,sectioning root,listed,form-associated,palpable
 * Parents: flow
 * Children: legend,flow
 * Attributes: globals,disabled,form,name
 */
final class FieldSetElement extends \iggyvolz\html\Element
{
    public const ELEMENT_NAME = 'fieldset';

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
        ?string $disabled = null,
        ?string $form = null,
        ?string $name = null
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
            'disabled' => $disabled,
            'form' => $form,
            'name' => $name,
        ], fn(?string $s) => !is_null($s));
        parent::__construct(self::ELEMENT_NAME, $attributes, $children);
    }
}
