@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://images.unsplash.com/photo-1449247666642-264389f5f5b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" class="card-img-top" alt="Produit 1">
                <div class="card-body">
                    <h5 class="card-title">Laravel</h5>
                    <p class="card-text">Le meilleur framework PHP.</p>
                    <a href="#" class="btn btn-primary">Découvrir</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://images.unsplash.com/photo-1494412519320-aa613dfb7738?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="Produit 2">
                <div class="card-body">
                    <h5 class="card-title">Amazen</h5>
                    <p class="card-text">La plateforme qui transforme l'expérience d'achat en ligne.</p>
                    <a href="#" class="btn btn-primary">Acheter</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://images.unsplash.com/photo-1570554886111-e80fcca6a029?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" class="card-img-top" alt="Produit 3">
                <div class="card-body">
                    <h5 class="card-title">Deliver</h5>
                    <p class="card-text">Nous délivrons vos articles à votre porte. Et nous sonnons à la porte !</p>
                    <a href="#" class="btn btn-primary">Acheter</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection