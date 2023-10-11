@extends('layout')

@section('title')
    Créer un article
@endsection

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-6">
            <h1>Créer un article</h1>
            <form method="POST" action="/posts">
              @csrf
              <div class="mb-3">
                  <label for="title" class="form-label">Titre</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Entrez le titre de votre billet de blog" required>
              </div>
      
              <div class="mb-3">
                  <label for="content" class="form-label">Contenu</label>
                  <textarea class="form-control" id="content" name="content" rows="5" placeholder="Saisissez le contenu de votre billet de blog" required></textarea>
              </div>
      
              <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>
    </div>
</div>
@endsection