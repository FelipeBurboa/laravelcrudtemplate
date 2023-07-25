@extends('layouts.app')

@section('body')
<h1 class="mb-0">Añadir Producto</h1>
<hr/>
<form action="{{ route('product.store')}}" method="POST">
    @csrf
    <!--The @csrf is thus a Blade directive used to generate a hidden token validated by the application.  -->
    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="title" placeholder="Nombre Produto">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="price" placeholder="Precio Producto">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" name="product_code" placeholder="Codigo Producto">
        </div>
    </div>
    
    <div class="row mb-3">
            <div class="col">
                <textarea name="description" class="form-control" placeholder="Descripción Producto"></textarea>
            </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection