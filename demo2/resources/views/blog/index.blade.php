@extends('layout')

@section('title')
    Créer un article
@endsection

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-6">
            {{-- Affiche les posts --}}
            @if($posts)
            <h1>Liste des posts</h1>
            @endif
            @forelse($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                </div>
                @empty
                    <p>Vous n'avez pas publié de posts.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection