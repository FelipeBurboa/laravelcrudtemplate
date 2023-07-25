@extends('layouts.app')

@section('body')

    <h1 class="mb-0">Modificar Producto</h1>
    <hr />
    <form action="{{ route('product.update',$product->id)}}" method="POST">
        @csrf
        <!--The @csrf is thus a Blade directive used to generate a hidden token validated by the application.  -->
        @method('PUT')

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="title" class="form-control" placeholder="Nombre Producto" value="{{ $product->title }}">
            </div>
            <div class="col mb-3">
                <label class="form-label text-danger">Precio</label>
                <input type="text" name="price" class="form-control" placeholder="Precio Producto" value="{{ $product->price }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Codigo</label>
                <input type="text" name="product_code" class="form-control" placeholder="Codigo Producto" value="{{ $product->product_code }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Descripcion</label>
                <textarea name="description" class="form-control" placeholder="Descripción Producto">{{$product->description}}</textarea>
            </div>
        </div>
    
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Modificar</button>
            </div>
        </div>

    </form>

@endsection