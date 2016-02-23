@extends('layouts.master')<!--padre-->

@section('title', 'Portal Web')<!--title-->

@section('sidebar') 
    @parent
    <p>esta sera la pagina principal</p>
@endsection

<!--estructura de la seccion-->
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Pagina principal</div>
        </div>
    </div>
@endsection