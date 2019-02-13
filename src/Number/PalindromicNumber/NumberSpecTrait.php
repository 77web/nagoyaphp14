<?php


namespace Nagoya\Doukaku14\Number\PalindromicNumber;


trait NumberSpecTrait
{
    private function reverse(string $str)
    {
        $chars = str_split($str);

        return implode('', array_reverse($chars));
    }
}
