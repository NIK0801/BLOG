<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.
//        $data = [];
//        $data['UsersCount']=User::all()->count();
//        $data['PostsCount']=Post::all()->count();
//        $data['CategoriesCount']=Category::all()->count();
//        $data['TagsCount']=Tag::all()->count();
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('personal.liked.index');
    }
}
