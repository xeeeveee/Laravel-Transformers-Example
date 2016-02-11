<?php

namespace App\Transformers;

use App\Models\Post;

class PostTransformer extends Transformer implements PostTransformerInterface
{
    protected $categoryTransformer;

    public function __construct(CategoryTransformerInterface $categoryTransformer)
    {
        $this->categoryTransformer = $categoryTransformer;
    }

    public function transform(Post $post)
    {
        $data = [
            'post_title'   => $post->title,
            'post_content' => $post->content
        ];

        if ( ! empty($post->categories)) {
            $data['post_categories'] = $this->categoryTransformer->transformCollection($post->categories);
        }

        return $data;
    }
}