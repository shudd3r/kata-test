<?php

namespace Shudd3r\Kata\Factory;

use Shudd3r\Kata\Message;


class MessageFactory
{
    public function createText(): Message
    {
        return new Message();
    }
}
