<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MyClassSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MyClass');
    }
}
