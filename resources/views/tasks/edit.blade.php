@extends('layouts.app')

@section('content')
<div class="ml-5 mt-5">
    <form action="{{route('tasks.update',$task->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <input type="text" name="list" value="{{$task->list}}">
            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        </div>
    </form>
</div>
@endsection
