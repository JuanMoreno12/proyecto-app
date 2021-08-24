@extends('layout')
@section('title',$product->id ? 'Actualizar Producto' : 'Nuevo Producto')
@section('encabezado',$product->id ? 'Actualizar Producto' : 'Nuevo Producto')
@section('content')

<form action="{{ route('product.save')}}" method="POST">
@csrf
<input type="hidden" name="id" value="{{ old('id') ? old('id'): $product->id }}">

<div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name"
            value="{{ old('name') ? old('name'): $product->name }}">
        </div>
        @error('name')
        <p class="alert alert-danger">
    {{ $message}}
</p>
        @enderror
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Cost</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="cost" name="cost"
            value="{{ old('cost') ? old('cost'): $product->cost }}">
        </div>
        @error('cost')
        <p class="alert alert-danger">
    {{ $message}}
</p>
        @enderror
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">price</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="price" name="price"
            value="{{ old('price') ? old('price'): $product->price }}">
        </div>
        @error('price')
        <p class="alert alert-danger">
    {{ $message}}
</p>
        @enderror
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">quantity</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="quantity" name="quantity"
            value="{{ old('quantity') ? old('quantity'): $product->quantity }}">
        </div>
        @error('quantity')
        <p class="alert alert-danger">
    {{ $message}}
</p>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="marca" class="form-label">Marca</label>
        <select class="form-select" name="marca" id="marca">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" {{ $product->brand_id === $brand->id ? 'selected' : '' }}>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-12">
        <label for="categoria" class="form-label">Categoría</label>
        <select class="form-select" name="categoria" id="categoria">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $product->category_id === $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <a href="/product" class="btn ">Cancelar</a>
    <button type="submit">Guardar</button>
</form>


@endsection