@extends('conponents.layout')

@section('content')
<p>[create]</p>
<form action="{{ route('index_create') }}" method="POST">
    @csrf
    <label for="">タイトル<input type="text" name="title" value="{{ old('title') }}"></label>
    @error('title')
    <div class="error">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label for="">テキスト<textarea name="text">{{ old('text') }}</textarea></label>
    @error('text')
    <div class="error">{{ $message }}</div>
    @enderror
    <button>create</button>
</form>
<p>[read]</p>
<table>
    <thead>
        <tr>
            <th>title</th>
            <th>show</th>
            <th>[update]</th>
            <th>[delete]</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td><a href="{{ route('show_view', $post) }}">show</a></td>
            <td><a href="{{ route('update_view', $post) }}">update</a></td>
            <td>
                <form action="{{ route('index_delete', $post) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button>delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
