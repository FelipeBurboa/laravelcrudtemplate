@extends('layouts.app')

@section('body')

    <h1 class="mb-0">Detalle Producto</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="title" class="form-control" placeholder="Nombre Producto" value="{{ $product->title }}"readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label text-danger">Precio</label>
            <input type="text" name="price" class="form-control" placeholder="Precio Producto" value="{{ $product->price }}"readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Codigo</label>
            <input type="text" name="product_code" class="form-control" placeholder="Codigo Producto" value="{{ $product->product_code }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Descripcion</label>
            <textarea name="description" class="form-control" placeholder="Descripción Producto" readonly>{{$product->description}}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Creado el</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Modificado el</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection