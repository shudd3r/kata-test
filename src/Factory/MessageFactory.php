<?php

namespace Shudd3r\Kata\Factory;

use Shudd3r\Kata\HtmlFormat;
use Shudd3r\Kata\Message;
use Shudd3r\Kata\TextFormat;


class MessageFactory
{
    public function createText(): Message
    {
        return new Message(new TextFormat());
    }

    public function createHtml(): Message
    {
        return new Message(new HtmlFormat());
    }
}
