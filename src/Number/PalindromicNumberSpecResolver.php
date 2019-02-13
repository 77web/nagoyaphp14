<?php


namespace Nagoya\Doukaku14\Number;


use Nagoya\Doukaku14\Number\PalindromicNumber\NumberSpecInterface;

class PalindromicNumberSpecResolver
{
    /**
     * @var NumberSpecInterface[]
     */
    private $specs = [];

    public function addSpec(NumberSpecInterface $spec)
    {
        $this->specs[] = $spec;
    }

    public function resolve(string $target)
    {
        foreach ($this->specs as $spec) {
            if ($spec->supports($target)) {
                return $spec;
            }
        }

        throw new \LogicException('該当するNumberSpecがありません');
    }
}
