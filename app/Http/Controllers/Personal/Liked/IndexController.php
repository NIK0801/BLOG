<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
//        $data = [];
//        $data['UsersCount']=User::all()->count();
//        $data['PostsCount']=Post::all()->count();
//        $data['CategoriesCount']=Category::all()->count();
//        $data['TagsCount']=Tag::all()->count();
        $posts = auth()->user()->likedPosts;
        return view('personal.liked.index', compact('posts'));
    }
}
