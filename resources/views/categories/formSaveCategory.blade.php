@extends('layout')
@section('title', ' Inventory App | 2242742')
@section('encabezado', $category->id ? 'Actualizar categoria' : 'Agregar categoria')
@section('content')

    <form action="{{ route('category.save') }}" method="POST">
        @csrf

        <input type="hidden" name="idCategory" id="idCategory" value="{{ $category->id ? $category->id : 0 }}">

        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Equipos tecnologicos" id="nombre" name="nombre"
                value="{{ $category->name ? $category->name : old('name') }}">
        </div>
            @error('nombre')
            <p class="alert alert-danger">
                    {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="description" class="form-label">Descripcion</label>
            <textarea class="form-control" name="description" id="description" placeholder="Descripción categoria">
                    {{ $category->description ? $category->description : old('description') }}
                </textarea>
        </div>
        <div class="mb-3 row">
            @error('description')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <a href="{{ route('category.getAll') }}" class="btn btn-info">Lista categorias</a>
            <button type="submit"
                class="btn btn-success">{{ $category->id ? 'Actualizar categoria' : 'Agregar categoria' }}</button>
        </div>
    </form>
@endsection
