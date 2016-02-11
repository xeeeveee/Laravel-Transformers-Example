<?php

namespace App\Transformers;

use Illuminate\Support\Collection;

abstract class Transformer implements TransformerInterface
{
    public function transformCollection(Collection $data)
    {
        return $data->map([$this, 'transform']);
    }
}