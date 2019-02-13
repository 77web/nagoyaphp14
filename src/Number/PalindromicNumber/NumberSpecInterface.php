<?php


namespace Nagoya\Doukaku14\Number\PalindromicNumber;


interface NumberSpecInterface
{
    public function supports(string $target): bool;

    public function isSatisfiedBy(string $target): bool;
}
