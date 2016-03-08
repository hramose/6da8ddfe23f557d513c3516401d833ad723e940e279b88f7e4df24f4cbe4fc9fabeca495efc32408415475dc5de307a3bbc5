@extends('layouts/app')
  
@section('content')
  <h2 class="page-header">Detalles de Rol</h2>

  <ul class="list-inline">
      <li>
          <a href="/rols/edit/{{{ $rol->rol_intId }}}" class="btn btn-primary pull-left">Editar</a>
      </li>
      <li>
          <form action="{{ url('/rols/delete', $rol->rol_intId) }}" method="POST">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
          </form>
      </li>
  </ul>

  <table class="table table-striped">
      <tbody>
      <tr>
          <th>Abreviatura</th>
          <td>{{{ $rol->rol_strAbrebiatura }}}</td>d
      </tr>
      <tr>
          <th>Nombre</th>
          <td>{{{ $rol->rol_strNombre }}}</td>
      </tr>
      <tr>
          <th>Descripcion</th>
          <td>{{{ $rol->rol_strDescripcion }}}</td>
      </tr>
      </tbody>
  </table>
@endsection