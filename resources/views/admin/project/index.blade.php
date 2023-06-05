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
        @endforeach
    </tbody>
</table>
@endsection