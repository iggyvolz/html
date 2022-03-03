<?php

namespace iggyvolz\html;

use iggyvolz\html\Element\HtmlElement;
use Stringable;

final class Document implements Stringable
{
    public function __construct(
        public readonly HtmlElement $html,
    )
    {
    }

    public function __toString(): string
    {
        return "<!DOCTYPE html>" . $this->html;
    }
}