@extends('layouts.admin')

@section('content')
<h1>Tutti i post</h1>
<div class="text-end mb-3">
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Nuovo post</a>
</div>
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TITOLO</th>
            <th scope="col">TYPE</th>
            <th scope="col">DESCRIZIONE</th>
            <th scope="col">SLUG</th>
            <th scope="col">AZIONI</th>
        </tr>
    </thead>
    <tbody>

        @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->type_id}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->slug}}</td>
           
            <td>
                <button type="button" class="btn btn-outline-primary">
                    <a href="{{route('admin.projects.show', $project->slug)}}">
                        <i class="fa-sharp fa-solid fa-expand fa-fade"></i>
                    </a>
                </button>
               
                <button type="button" class="btn btn-outline-primary">
                    <a href="{{route('admin.projects.edit', $project->slug)}}">
                        <i class="fa-solid fa-pen-to-square fa-fade"></i>
                    </a>
                </button>
                
                <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->slug) }}"  method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fa-solid fa-trash fa-fade"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection