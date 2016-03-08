@extends('layouts/app')
  
@section('content')
    <h2 class="page-header">Permisos</h2>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Abreviatura</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($permits as $permit)
            <tr>
                 <td>{{{ $permit->per_strAbrebiatura }}}</td>
                 <td>{{{ $permit->per_strNombre }}}</td>
                 <td>{{{ $permit->per_strDescripcion }}}</td>
                 <td>
                   <a href="/permits/show/{{{ $permit->per_intId }}}" class="btn btn-default btn-xs">Detalles</a>
                   <a href="/permits/edit/{{{ $permit->per_intId }}}" class="btn btn-success btn-xs">Editar</a>
                   <form action="{{ url('/permits/delete', $permit->per_intId) }}" method="POST">
                     {!! csrf_field() !!}
                     <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                   </form>
                 </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection