<?php

namespace Shudd3r\Kata;


interface Format
{
    public function render(string $name): string;
}
