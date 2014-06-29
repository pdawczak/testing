<?php

namespace spec\App\CalculatorBundle\Calculator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\CalculatorBundle\Calculator\Calculator');
    }

    function it_adds_two_numbers()
    {
        $this->add(2, 3)->shouldBeLike(5);
        $this->add(3, 4)->shouldBeLike(7);
    }
}
