@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{ $project->title }}</h1>
    <div class="text-end">
        {{ $project->slug }}
    </div>
    <p class="mt-4">{{ $project->description }}</p>
    <button type="button" class="btn btn-danger mb-2">
        <a class="text-decoration-none text-reset" href="{{ route('admin.projects.index', $project->slug) }}">
            TORNA ALLA LISTA
        </a>
    </button>

    <button type="button" class="btn btn-danger mb-2">
        <a class="text-decoration-none text-reset" href="{{ route('admin.projects.edit', $project->slug) }}">MODIFICA</a>
    </button>
@endsection