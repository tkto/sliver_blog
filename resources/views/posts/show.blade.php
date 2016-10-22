@extends('main')

@section('content')
<h1>Articles</h1>



<article>
	
	<h2>{{$post_data->title}}</h2>
	<div class="body">{{$post_data->body}}</div>
</article>

@endsection