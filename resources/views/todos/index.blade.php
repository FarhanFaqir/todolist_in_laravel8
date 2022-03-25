@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Todos</h1>
    @if(count($todos) > 0)

    @foreach($todos as $todo)
        <div class="jumbotron pt-2 pb-2">
            <h4><a href="todo/{{$todo->id}}">{{$todo->text}}</a> <span class="btn btn-danger ">{{$todo->due}}</span></h4>
        </div>
        
    @endforeach

    @endif

@endsection