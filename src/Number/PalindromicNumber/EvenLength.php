<?php


namespace Nagoya\Doukaku14\Number\PalindromicNumber;


class EvenLength implements NumberSpecInterface
{
    use NumberSpecTrait;

    public function supports(string $target): bool
    {
        return strlen($target) % 2 === 0;
    }

    public function isSatisfiedBy(string $target): bool
    {
        $length = strlen($target);
        $firstHalf = substr($target, 0, $length / 2);
        $secondHalf = substr($target, -1 * $length / 2);

        return $firstHalf === $this->reverse($secondHalf);
    }
}
