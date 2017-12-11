<?php

use HelloName\HelloName;

class HelloNameTest extends PHPUnit_Framework_TestCase
{
    public function test01()
    {
        $this->assertEquals("Hello a", HelloName::sayHello("a"));
    }
}
