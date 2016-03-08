@extends('layouts/app')
  
@section('content')
  <h2 class="page-header">Detalles de Permiso</h2>

  <ul class="list-inline">
      <li>
          <a href="/permits/edit/{{{ $permit->per_intId }}}" class="btn btn-primary pull-left">Editar</a>
      </li>
      <li>
          <form action="{{ url('/permits/delete', $permit->per_intId) }}" method="POST">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
          </form>
      </li>
  </ul>

  <table class="table table-striped">
      <tbody>
      <tr>
          <th>Abreviatura</th>
          <td>{{{ $permit->per_strAbrebiatura }}}</td>d
      </tr>
      <tr>
          <th>Nombre</th>
          <td>{{{ $permit->per_strNombre }}}</td>
      </tr>
      <tr>
          <th>Descripcion</th>
          <td>{{{ $permit->per_strDescripcion }}}</td>
      </tr>
      </tbody>
  </table>
@endsection