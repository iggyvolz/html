<?php

namespace iggyvolz\html;

/** @internal  */
trait VoidElement
{
    public function __toString(): string
    {
        // https://html.spec.whatwg.org/multipage/syntax.html#start-tags - void elements
        return $this->openTag();
    }
}