@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <a class="btn btn-primary btn-lg" href="{{ route('products.create') }}" role="button">Ajouter un produit</a>
            </div>
            @forelse($products as $product)
                <div class="col-3">
                    <p>Nom: {{ $product->name }}</p>
                    <p>Description: {{ $product->description }}</p>
                    <p>Prix: {{ $product->price }}€</p>
                    <p>Stock: {{ $product->stock }}</p>
                    <p>Note: {{ $product->rate }}</p>
                </div>
            @empty
                <p>Ajoutez des produits en cliquant sur le bouton "Ajouter".</p>
            @endforelse
            
        </div>
    </div>
@endsection
