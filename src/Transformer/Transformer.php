<?php

namespace WZRD\Contracts\Transformer;

interface Transformer
{
    /**
     * Transform a value with a transformer.
     *
     * @param mixed  $value
     * @param object $transformer
     *
     * @return array
     */
    public function transform($value, $transformer);
}
