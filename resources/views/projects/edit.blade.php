@extends('layouts.admin')

@section('title')
    Cambia Progetto
@endsection

@section('content')

    <div class="container mt-5">
        <div class="col-3">
            <img class="img-gallery img-fluid" src="{{$project->image}}" alt="{{$project->title}}">
            <div class="text-white"><strong>Nome Progetto:</strong>{{$project->name}}</div>
        </div>
    </div>


    <div class="container py-5">
        <h1>Cambia progetto</h1>

        <form action="{{route('admin.projects.update', $project->id)}}"  method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome progetto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="develop_with" class="form-label">Sviluppato con:</label>
                <input type="text" class="form-control" id="develop_with" name="develop_with" value="{{ old('develop_with') }}">
            </div>

            <div class="mb-3">
                <label for="link_github" class="form-label">Link progetto</label>
                <input type="text" class="form-control" id="link_github" name="link_github" value="{{ old('link_github') }}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Link Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn btn-danger mt-5 mb-5 text-uppercase">Modifica</button>

        </form>

    </div>
@endsection