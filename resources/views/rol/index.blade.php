@extends('layouts/app')
  
@section('content')
    <h2 class="page-header">Roles</h2>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Abreviatura</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rols as $rol)
            <tr>
                 <td>{{{ $rol->rol_strAbrebiatura }}}</td>
                 <td>{{{ $rol->rol_strNombre }}}</td>
                 <td>{{{ $rol->rol_strDescripcion }}}</td>
                 <td>
                   <a href="/rols/show/{{{ $rol->rol_intId }}}" class="btn btn-default btn-xs">Detalles</a>
                   <a href="/rols/edit/{{{ $rol->rol_intId }}}" class="btn btn-success btn-xs">Editar</a>
                   <form action="{{ url('/rols/delete', $rol->rol_intId) }}" method="POST">
                     {!! csrf_field() !!}
                     <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                   </form>
                 </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection