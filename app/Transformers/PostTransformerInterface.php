<?php

namespace App\Transformers;

use App\Models\Post;

interface PostTransformerInterface extends TransformerInterface
{
    public function transform(Post $category);
}