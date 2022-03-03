<?php

namespace iggyvolz\html;

/** @internal  */
trait EscapableRawTextElement
{
    public readonly string $contents;
    protected function innerHtml(): string
    {
        // TODO escape contents
        return $this->contents;
    }
}