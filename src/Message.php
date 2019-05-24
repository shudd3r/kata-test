<?php

namespace Shudd3r\Kata;


class Message
{
    private $format;

    public function __construct(Format $format)
    {
        $this->format = $format;
    }

    public function render(string $name): string
    {
        return $this->format->render($name);
    }
}
