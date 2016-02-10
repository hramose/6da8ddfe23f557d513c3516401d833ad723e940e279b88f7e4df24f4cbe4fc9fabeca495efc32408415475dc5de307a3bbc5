@extends('layouts.master')

@section('title', 'Hello world')

@section('sidebar')
    <p>Hello world.</p>
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Hello, {{ $name or 'Default' }}, welcome to Laraland!</div>
            <p>Last visit at, {{ time() }}.</p>

            @unless (Auth::check())
    			<p>You are not signed in.</p>
			@endunless
        </div>
    </div>
@endsection
