<?php

namespace iggyvolz\html;

/** @internal  */
trait RawTextElement
{
    public readonly string $contents;
    protected function innerHtml(): string
    {
        return $this->contents;
    }
}