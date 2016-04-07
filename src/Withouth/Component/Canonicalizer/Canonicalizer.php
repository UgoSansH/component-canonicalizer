<?php

namespace Withouth\Component\Canonicalizer;

use Behat\Transliterator\Transliterator;

/**
 * Canonicalizer
 */
class Canonicalizer extends Transliterator implements CanonicalizerInterface
{
    /**
     * Canonicalize
     *
     * @param string $chain
     *
     * @return string
     */
    public function canonical($chain)
    {
        return $this->urlize($chain);
    }

}
