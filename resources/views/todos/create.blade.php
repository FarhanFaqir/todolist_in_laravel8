@extends('layouts.app')

@section('content')

<h1>Create Todo</h1>

<div>
    <form method="POST" action="{{ url('todo') }}">
        @csrf
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" class="form-control" id="text" name='text'>
        </div>
        <div class="form-group">Body</label>
            <textarea class="form-control" id="body" name="body" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="due">Due</label>
            <input type="due" class="form-control" id="due" name='due'>
        </div>
        <input type="submit"  class="btn btn-primary">
    </form>
</div>

@endsection