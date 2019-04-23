<?php

namespace Shudd3r\Kata\Tests;

use PHPUnit\Framework\TestCase;
use Shudd3r\Kata\MessageFactory;


class MessageTest extends TestCase
{
    public function testRunWithDefaultValue()
    {
        $factory = new MessageFactory();
        $this->assertSame('Hello World!', $factory->createText()->render());
    }

    public function testRunWithConcreteValue()
    {
        $factory = new MessageFactory();
        $this->assertSame('Hello Name', $factory->createText()->render('Name'));
    }
}
