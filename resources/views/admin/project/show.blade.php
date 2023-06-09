@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{ $project->title }}</h1>
    <div>
        @if ($project->type)
            <span>Categoria: {{ $project->type->name }}</span>
        @else
            <span>Nessun tipo selezionato!</span>
        @endif
    </div>
    <div class="text-end">
        {{ $project->slug }}
    </div>
    <p class="mt-4">{{ $project->description }}</p>
    <div class="mb-3">
       
        @forelse ($project->technologies as $technology)
            @if ($technology->name !== null)
                <p>{{ $technology->name }}</p>
            @endif

            @empty
              <p>nessuna tecnologia selezionata</p>  
        @endforelse
    </div>
    <button type="button" class="btn btn-danger mb-2">
        <a class="text-decoration-none text-reset" href="{{ route('admin.projects.index', $project->slug) }}">
            TORNA ALLA LISTA
        </a>
    </button>

    <button type="button" class="btn btn-danger mb-2">
        <a class="text-decoration-none text-reset" href="{{ route('admin.projects.edit', $project->slug) }}">MODIFICA</a>
    </button>
@endsection