@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="">Modifica il tuo progetto</h1>
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label ">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelp" value="{{ $project->title }}">
                <div id="titleHelp" class="form-text">Modifica il nome</div>
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="image" class="form-label ">Immagine</label>
                <input type="text" class="form-control  @error('image') is-invalid @enderror" name="image"
                    id="image" aria-describedby="imageHelp" value="{{ $project->image }}">
                <div id="imageHelp" class="form-text">Modifica l'immagine</div>
                @error('image')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label ">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="10">
                </textarea>
                <div id="descriptionHelp" class="form-text">Modifica la descrizione</div>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
