@extends('layouts.admin')

@section('content')
<h1>Tutti i post</h1>

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Slug</th>
        </tr>
    </thead>
    <tbody>

        @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->slug}}</td>
            </tr>
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
        @endforeach
    </tbody>
</table>
@endsection