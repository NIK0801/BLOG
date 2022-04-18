<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Category $category)
    {
        // TODO: Implement __invoke() method.
        $posts = $category->posts()->paginate(4);
        return view('category.post.index', compact('posts'));
    }
}
