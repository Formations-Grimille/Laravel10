@extends('layout')

@section('title')
    Créer un article
@endsection

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-6">
            <h1>S'enregistrer sur le site</h1>
            <form method="POST" action="/auth/register">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre pseudo" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">Confirmation du mot de passe</label>
                    <input type="password" class="form-control" id="password-confirm" name="password_confirm" placeholder="Confirmez votre mot de passe" required>
                </div>
        
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>
</div>
@endsection