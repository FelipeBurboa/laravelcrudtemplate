@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Listado Productos</h1>
        <a href="{{route('product.create')}}" class="btn btn-primary">Añadir Producto</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Codigo Producto</th>
                <th>Descripcion</th>
                <th class="text-center">Accion</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count()>0)
                @foreach ($product as $p)
                    <tr>
                        <td class="align-middle">{{$p->id}}</td>
                        <td class="align-middle">{{$p->title}}</td>
                        <td class="align-middle">{{$p->product_code}}</td>
                        <td class="align-middle">{{$p->description}}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic Example">
                                <a href="{{ route('product.show',$p->id) }}" type="button" class="btn btn-secondary">Detalles</a>&nbsp
                                <a href="{{ route('product.edit',$p->id) }}" type="button" class="btn btn-warning">Editar</a>&nbsp
                                <form action="{{ route('product.destroy', $p->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('¿Esta seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Productos no encontrados</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection