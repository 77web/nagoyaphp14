<?php

namespace Nagoya\Doukaku14;

use Nagoya\Doukaku14\Number\PalindromicNumberSpecResolver;

class App
{
    /**
     * @var PalindromicNumberSpecResolver
     */
    private $specResolver;

    /**
     * @param PalindromicNumberSpecResolver $specResolver
     */
    public function __construct(PalindromicNumberSpecResolver $specResolver)
    {
        $this->specResolver = $specResolver;
    }

    public function run(string $input)
    {
        list($min, $max, $base) = $this->parseInput($input);

        $matches = [];
        for ($i = $min; $i < $max; $i++) {
            $target = base_convert($i, 10, $base);
            if ($this->specResolver->resolve($target)->isSatisfiedBy($target)) {
                $matches[] = $target;
            }
        }

        return count($matches);
    }

    private function parseInput(string $input)
    {
        list($min, $max, $base) = explode(',', $input);

        return [
            (int)$min,
            (int)$max,
            (int)$base,
        ];
    }
}
