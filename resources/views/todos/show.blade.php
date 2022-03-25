@extends('layouts.app')

@section('content')
<a class="btn btn-sm btn-dark mt-2 mb-4" href="/">Go Back</a>
<h1> {{$todo->text}} </h1>
<span class="text-danger">{{$todo->due}}</span>
<hr>
<p>{{ $todo->body }}</p>

<div class="d-flex">
    <a href="{{ url('todo/edit') }}/{{$todo->id}}" class="btn btn-sm btn-primary">Edit</a>

    <form action="{{ route('todo.destroy', ['todo' => $todo->id]) }}" method="POST">
        @csrf

        @method('DELETE')

        <button type="submit" class="btn btn-danger ml-2">Delete</button>
    </form>
</div>


@endsection