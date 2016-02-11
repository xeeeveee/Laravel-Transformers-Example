<?php

namespace App\Transformers;

use App\Models\Category;

class CategoryTransformer extends Transformer implements CategoryTransformerInterface
{
    public function transform(Category $category)
    {
        return [
            'category_name' => $category->name
        ];
    }
}