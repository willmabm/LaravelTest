@extends('layouts.app')

@section('title', 'List')

@section('content')
    <table class="table text-center">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach($pruebas as $prueba)
                <tr>
                    <th scope="row">{{$prueba->id}}</th>
                    <td>{{$prueba->name}}</td>
                    <td>{{$prueba->description}}</td>
                    <td>
                        <a href="/pruebas/{{$prueba->slug}}/edit" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                    <a href="/pruebas/destroy/{{$prueba->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                
            @endforeach
    </tbody>
    </table>

    <a href="/pruebas/create" class="btn btn-primary">Create</a>
@endsection