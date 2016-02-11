<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Transformers\PostTransformerInterface;

class TransformerController extends Controller
{
    protected $postTransformer;

    protected $categoryTransformer;

    public function __construct(PostTransformerInterface $postTransformer)
    {
        $this->postTransformer = $postTransformer;
    }

    public function index()
    {
        $posts = Post::with('categories')->get();

        return $this->postTransformer->transformCollection($posts);
    }
}
