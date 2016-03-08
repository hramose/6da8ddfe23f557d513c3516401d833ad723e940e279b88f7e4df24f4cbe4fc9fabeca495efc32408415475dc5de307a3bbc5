@extends('layouts/app')
  
@section('content')
  <h2 class="page-header">Editar permiso</h2>

  <form class="form-horizontal" role="form" method="POST" action="{{ url('/permits/edit', $permit->per_intId) }}">
    {!! csrf_field() !!}

    <div class="form-group{{ $errors->has('per_strAbrebiatura') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Abreviatura</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="per_strAbrebiatura" value="{{ $permit->per_strAbrebiatura }}">

            @if ($errors->has('per_strAbrebiatura'))
                <span class="help-block">
                    <strong>{{ $errors->first('per_strAbrebiatura') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('per_strNombre') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Nombre</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="per_strNombre" value="{{ $permit->per_strNombre }}">

            @if ($errors->has('per_strNombre'))
                <span class="help-block">
                    <strong>{{ $errors->first('per_strNombre') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('per_strDescripcion') ? ' has-error' : '' }}">
        <label class="col-md-4 control-label">Descripcion</label>

        <div class="col-md-6">
            <textarea class="form-control" name="per_strDescripcion">
              {{ $permit->per_strDescripcion }}
            </textarea>

            @if ($errors->has('per_strDescripcion'))
                <span class="help-block">
                    <strong>{{ $errors->first('per_strDescripcion') }}</strong>
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