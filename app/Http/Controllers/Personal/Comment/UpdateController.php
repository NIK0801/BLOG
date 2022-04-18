<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Comment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        // TODO: Implement __invoke() method.
//        $data = [];
//        $data['UsersCount']=User::all()->count();
//        $data['PostsCount']=Post::all()->count();
//        $data['CategoriesCount']=Category::all()->count();
//        $data['TagsCount']=Tag::all()->count();
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }
}
