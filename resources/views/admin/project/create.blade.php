@extends('layouts.admin')

@section('content')
<h1>Crea un nuovo post!</h1>
<div class="container">
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('admin.projects.store')}}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type">Seleziona il tipo</label>
            <select class="form-select" name="type_id" id="type"  aria-label="Default select example">
                <option value=""></option>
                @foreach ($types as $type)
                    <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
                
            </select>
        </div>
        <div class="mb-3">
            <label for="technology">Seleziona la tecnologia</label>
            <select class="form-select" name="technology_id" id="technology"  aria-label="Default select example">
                <option value=""></option>
                @forelse ($project->technologies as $technology)
                    @if ($technology->name !== null)
                        <p>{{ $technology->name }}</p>
                    @endif
        
                    @empty
                    <p>nessuna tecnologia selezionata</p>  
                @endforelse
                
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label" >Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{old('description')}}"></textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection