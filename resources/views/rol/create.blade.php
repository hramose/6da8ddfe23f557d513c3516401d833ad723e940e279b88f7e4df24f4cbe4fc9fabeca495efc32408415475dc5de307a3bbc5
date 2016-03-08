@extends('layouts/app')
  
@section('content')
  <h2 class="page-header">Nuevo rol</h2>

  <form class="form-horizontal" role="form" method="POST" action="{{ url('/rols/create') }}">
    {!! csrf_field() !!}

    <div class="form-group{{ $errors->has('rol_strAbrebiatura') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Abreviatura</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="rol_strAbrebiatura" value="{{ old('rol_strAbrebiatura') }}">

            @if ($errors->has('rol_strAbrebiatura'))
                <span class="help-block">
                    <strong>{{ $errors->first('rol_strAbrebiatura') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('rol_strNombre') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Nombre</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="rol_strNombre" value="{{ old('rol_strNombre') }}">

            @if ($errors->has('rol_strNombre'))
                <span class="help-block">
                    <strong>{{ $errors->first('rol_strNombre') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('rol_strDescripcion') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Descripcion</label>

        <div class="col-md-6">
            <textarea class="form-control" name="rol_strDescripcion" value="{{ old('rol_strDescripcion') }}"></textarea>

            @if ($errors->has('rol_strDescripcion'))
                <span class="help-block">
                    <strong>{{ $errors->first('rol_strDescripcion') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i>Guardar
            </button>
        </div>
    </div>
  </form>
@endsection