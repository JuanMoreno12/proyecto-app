@extends('layout')
@section('title','Productos')
@section('encabezado','lista de Productos')
@section('content')
<a href="{{route('product.form')}}" class="btn btn-promary">nuevo producto</a>
@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}

</div>
@endif
<table class="table table-striped tble-hover">
    <thead>
        <tr>
<th>name</th>
<th>Cost</th>
<th>Price</th>
<th>Quantity</th>
<TH>Brand</TH>
<th>category</th>
<TH>Eliminar</TH>
<th>Actualizar</th>


        </tr>
        
    </thead>
    <tbody>
@foreach($productList as $producto)
<tr>
<td>{{$producto->name}}</td>
<td>{{$producto->cost}}</td>
<td>{{$producto->price}}</td>
<td>{{$producto->quantity}}</td>
<td>{{ $product['brand']->name }}</td>
<td>{{ $product->category->name }}</td>
<td><a href="{{route('product.form',['id'=>$producto->id])}}" class="btn btn-warning">Editar</a></td>
<?php //<td><a href="/product/delete/{{$producto->id}}"class="btn btn-danger">Borrar</a></td> ?>
<td><a href="{{route('prodDelete',['id'=>$producto->id])}}"class="btn btn-danger">Borrar</a></td>
</tr>
@endforeach
</tbody></table>
@endsection
