<?php

namespace Shudd3r\Kata;


class MessageFactory
{
    public function createText(): Message
    {
        return new Message();
    }
}
