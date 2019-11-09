@extends('layouts.app')

@section('title', 'Test Edit')

@section('content')
    <form class="form-group" action="/pruebas/{{$prueba->slug}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" value="{{$prueba->name}}" name="name" id="name" maxlength="32">
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10" maxlength="65535 ">{{$prueba->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
        
@endsection