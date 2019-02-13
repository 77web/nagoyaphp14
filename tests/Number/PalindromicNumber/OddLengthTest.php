<?php


namespace Nagoya\Doukaku14\Number\PalindromicNumber;


use PHPUnit\Framework\TestCase;

class OddLengthTest extends TestCase
{
    public function test_supports()
    {
        $SUT = new OddLength();
        $this->assertTrue($SUT->supports('aaa'));
        $this->assertFalse($SUT->supports('aa'));
    }

    public function test_isSatisfiedBy()
    {
        $SUT = new OddLength();
        $this->assertTrue($SUT->isSatisfiedBy('a'));
        $this->assertTrue($SUT->isSatisfiedBy('aaa'));
        $this->assertTrue($SUT->isSatisfiedBy('abcba'));
        $this->assertFalse($SUT->isSatisfiedBy('abcde'));
    }
}
