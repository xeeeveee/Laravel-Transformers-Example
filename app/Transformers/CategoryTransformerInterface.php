<?php

namespace App\Transformers;

use App\Models\Category;

interface CategoryTransformerInterface extends TransformerInterface
{
    public function transform(Category $category);
}