<?php

namespace Shudd3r\Kata;


class Message
{
    public function render(string $name = null): string
    {
        return 'Hello ' . ($name ?? 'World!');
    }
}
