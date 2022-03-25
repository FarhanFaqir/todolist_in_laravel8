@extends('layouts.app')

@section('content')

<a class="btn btn-sm btn-dark mt-2 mb-4" href="{{ url('todo') }}/{{$todo->id}}">Go Back</a>

<h1>Edit Todo</h1>

<div>
    <form method="PATCH" action="{{ url('todo/update') }}/{{$todo->id}}">
        @csrf
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" class="form-control" value="{{$todo->text}}" id="text" name='text'>
        </div>
        <div class="form-group">Body</label>
            <textarea class="form-control" id="body" name="body" rows="5">{{$todo->body}}</textarea>
        </div>
        <div class="form-group">
            <label for="due">Due</label>
            <input type="due" class="form-control" value="{{$todo->due}}" id="due" name='due'>
        </div>
        <input type="submit" value="Update"  class="btn btn-primary">
    </form>
</div>

@endsection