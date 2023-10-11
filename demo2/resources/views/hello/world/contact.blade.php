@extends('layout')

@section('title')
    Page de contact
@endsection

@section('content')
<div class="container">
  <div class="row">
      <div class="col-6">
        <h1>Ma page de contact</h1>
        <form>
          <label for="">Email</label>
          <input type="text"/>
          <button class="btn btn-primary">Envoyer</button>
        </form>
      </div>
  </div>
</div>

@endsection