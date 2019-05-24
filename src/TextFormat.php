<?php


namespace Shudd3r\Kata;


class TextFormat implements Format
{
    public function render(string $name): string
    {
        return 'Hello ' . $name;
    }
}
