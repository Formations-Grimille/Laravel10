<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('comments')->get();

        foreach ($posts as $post) {
            $comments = $post->comments;
        }

        return "<pre>$posts</pre>";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $post = new Post();
        // $post->title = "Mon super titre d'article 3";
        // $post->content = "Bla bla bla";
        // $post->published_at = Carbon::now();

        $post = new Post([
            'title' => "Mon super titre d'article 4",
            'content' => 'Blablabla',
            'published_at' => Carbon::now()
        ]);
        $post->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments;

        return "<p>$comments</p>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
