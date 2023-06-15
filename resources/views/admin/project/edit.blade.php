@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Modifica il post</h2>
</div>
<div class="container">
    <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
    
        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$project->title}}" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type">Seleziona il tipo</label>
            <select class="form-select" id="type" name="type_id" aria-label="Default select example">
                <option value=""></option>
                @foreach ($types as $type)
                <option @selected($type->id == old('type_id', $project->type?->id)) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
                
            </select>
        </div>
        <div class="mb-3">
            <label for="type">Seleziona il tipo</label>
            <select class="form-select" id="type" name="type_id" aria-label="Default select example">
                <option value=""></option>
                @foreach ($technologies as $technology)
                <option @selected($technology->id == old('technology_id')) value="{{ $technology->id }}">{{ $technology->name }}</option>
                @endforeach
                
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" id="description" name="description" value="{{$project->description}}">
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection