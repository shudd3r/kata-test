<?php

namespace Shudd3r\Kata;


class Message
{
    public function render(string $name): string
    {
        return 'Hello ' . $name;
    }
}
