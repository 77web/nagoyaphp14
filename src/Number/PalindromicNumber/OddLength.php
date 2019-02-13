<?php


namespace Nagoya\Doukaku14\Number\PalindromicNumber;


class OddLength implements NumberSpecInterface
{
    use NumberSpecTrait;

    public function supports(string $target): bool
    {
        return strlen($target) % 2 === 1;
    }

    public function isSatisfiedBy(string $target): bool
    {
        $length = strlen($target) - 1;

        // 1文字は常に回文数
        if ($length === 0) {
            return true;
        }

        $firstHalf = substr($target, 0, $length / 2);
        $secondHalf = substr($target, -1 * $length / 2);

        return $firstHalf === $this->reverse($secondHalf);
    }
}
