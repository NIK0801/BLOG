<?php

namespace App\Http\Controllers\Personal\Comment;

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
        $comments = auth()->user()->comments;
        return view('personal.comment.index', compact('comments'));
    }
}
