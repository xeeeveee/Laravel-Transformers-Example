<?php

namespace App\Transformers;

use Illuminate\Support\Collection;

interface TransformerInterface
{
    public function transformCollection(Collection $data);
}