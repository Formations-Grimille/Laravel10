<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCreatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::with('comments')->get();

        foreach ($posts as $post) {
            $comments = $post->comments;
        }

        return view('blog.index', [ 'posts' => $posts ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestCreatePost $request)
    {
        $post = new Post($request->all());
        $post->save();

        return $post;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments;

        return response("Ce contenu est interdit.", 403);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        return view('blog.edit', [ 'post' => $post ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $post->title = 'Titre édité !!!';
        $post->content = 'Un autre contenu !';
        $post->save();

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }
}
