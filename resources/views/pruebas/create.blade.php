@extends('layouts.app')

@section('title', 'Test Create')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            
        </div>
            
    @endif

    <form class="form-group" action="/pruebas" method="post">

        @csrf

        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" maxlength="32" require>
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10" maxlength="65535 "></textarea>
        </div>

        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

    </form>
        
@endsection