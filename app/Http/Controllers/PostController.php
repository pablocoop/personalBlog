<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')
                    ->paginate(10);


        return view('posts.index',compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        /* $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => ['required', 'unique:posts'],
            'category' => ['required'],
            'content' => ['required'],
        ]); */


        Post::create($request->all());
        /* Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'content' => $request->content,
        ]); */

        /* $post = new Post();

        $post->title = $request->title; 
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();*/
        return redirect()->route('posts.index'); 
    }

    public function show(Post $post)
    {
        // return view('posts.show', [
        //     'post' => $post
        // ]);


        //$post = Post::find($post); //esto se hace con show(Post $post)

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {

        //$post = Post::find($post);



        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        //$post = Post::find($post);

        /* $post->title = $request->title; 
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save(); */

        $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => "required|unique:posts,slug,{$post->id}",
            'category' => ['required'],
            'content' => ['required'],
        ]);

        $post->update($request->all());

        return redirect()->route('posts.show', $post);

    }

    public function destroy(Post $post)
    {
        //$post = Post::find($post);
        $post->delete();

        return redirect()->route('posts.index');
    }

    //
}
