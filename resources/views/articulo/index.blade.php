@extends('layouts.plantillabase');

@section('contenido')
    <a href="articulos/create" class="btn btn-primary">CREAR</a>    

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope = "col">ID</th>
                <th scope = "col">Codigo</th>
                <th scope = "col">Descripcion</th>
                <th scope = "col">Cantidad</th>
                <th scope = "col">Precio</th>
                <th scope = "col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{$articulo->id}}</td>
                    <td>{{$articulo->Codigo}}</td>
                    <td>{{$articulo->Descripcion}}</td>
                    <td>{{$articulo->Cantidad}}</td>
                    <td>{{$articulo->Precio}}</td>
                    <td>
                        <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                        <button class="btn btn-danger">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection