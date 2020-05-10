<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;
class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');
//        dd($users);
        $posts = Posts::whereIn('user_id', $users)->get();
        dd($posts);
    }

    public function create(User $user){
//        $this->authorize('create', $user->profile);
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);

        $imagePath = request('image')->store('uploads/img', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' =>$imagePath
        ]);
        // dd(request()->all());

        return redirect('/profile/' .auth()->user()->id);
    }

    public function show(\App\Posts $post){
        return view('posts.show', compact('post'));
    }
}


