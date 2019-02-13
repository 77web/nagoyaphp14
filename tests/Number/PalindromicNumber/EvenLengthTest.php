<?php


namespace Nagoya\Doukaku14\Number\PalindromicNumber;


use PHPUnit\Framework\TestCase;

class EvenLengthTest extends TestCase
{
    public function test_supports()
    {
        $SUT = new EvenLength();
        $this->assertTrue($SUT->supports('aa'));
        $this->assertFalse($SUT->supports('abc'));
    }

    public function test_isSatisfiedBy()
    {
        $SUT = new EvenLength();
        $this->assertTrue($SUT->isSatisfiedBy('aa'));
        $this->assertTrue($SUT->isSatisfiedBy('abba'));
        $this->assertFalse($SUT->isSatisfiedBy('abcd'));
    }
}
