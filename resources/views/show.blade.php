@extends('conponents.layout')

@section('content')
<h2>{{ $post->title }}</h2>

<p>{!! nl2br(e($post->text)) !!}</p>

<a href="{{ route('index_view') }}">back</a>
@endsection
