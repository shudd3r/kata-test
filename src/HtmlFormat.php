<?php

namespace Shudd3r\Kata;


class HtmlFormat implements Format
{
    public function render(string $name): string
    {
        return '<p>Hello <strong>' . $name . '</strong></p>';
    }
}
