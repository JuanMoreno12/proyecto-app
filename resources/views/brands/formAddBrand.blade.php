@extends('layout')
@section('title', 'Add products - Inventory App')
@section('encabezado', $brand->id ? 'Actualizar marca' : 'Agregar marca')
@section('content')
    <form action="{{ route('brand.Save') }}" method="POST">
        @csrf

        <input type="hidden" name="idBrand" id="idBrand" value="{{ $brand->id ? $brand->id : 0 }}">

        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Arroz" id="nombre" name="nombre"
                value="{{ $brand->name ? $brand->name : old('name') }}">
        </div>

            @error('nombre')
            <p class="alert alert-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <a href="/product" class="btn ">Cancelar</a>
        <button type="submit">Guardar</button>
    </form>
@endsection
