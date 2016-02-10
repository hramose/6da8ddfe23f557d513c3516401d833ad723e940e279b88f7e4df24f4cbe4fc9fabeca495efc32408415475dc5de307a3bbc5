@extends('layouts.master')

@section('title', 'Laravel 5')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Laravel 5</div>
        </div>
    </div>
@endsection

        

