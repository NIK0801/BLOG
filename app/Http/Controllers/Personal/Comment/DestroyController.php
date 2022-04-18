<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class DestroyController extends Controller
{
    public function __invoke(Comment $comment)
    {
        // TODO: Implement __invoke() method.
//        $data = [];
//        $data['UsersCount']=User::all()->count();
//        $data['PostsCount']=Post::all()->count();
//        $data['CategoriesCount']=Category::all()->count();
//        $data['TagsCount']=Tag::all()->count();
        $comment->delete();
        return redirect()->route('personal.comment.index');
    }
}
