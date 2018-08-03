@extends('layouts.default')

@section('content')
	<h1>laravel首页</h1>
	<h2>{{$array['name']}}</h2>
	<h2>{{$array['sex']}}</h2>
	<h2>{{$array['age']}}</h2>
	<form action="/form" method="POST">
		{{ csrf_field() }}
		<input type="text" name="name">
		<input type="submit">
	</form>
@endsection

