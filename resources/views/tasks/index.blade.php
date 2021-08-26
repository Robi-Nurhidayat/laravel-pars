@extends('layouts.app')

@section('content')

    <div class="ml-5 mt-5">
        <form action="{{route('tasks.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="list" placeholder="input your list">
                @error('list')
                <div>
                    {{$message}}
                </div>

                @enderror
                <button type="submit" class="btn btn-primary btn-sm">Add</button>
            </div>
        </form>
    </div>


    <div class="row">
        <div class="col-md-6 col-lg-6 ">
            <ul class="list-group ml-4 ">
                @foreach ($tasks as $index => $task)
                    <li class="list-group-item"> {{$index + 1}}. {{$task->list}}  -- <a href="{{route('tasks.edit',$task->id)}}">Edit</a> --
                        <form action="{{route('tasks.destroy',$task->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                        </form></li>
                @endforeach

              </ul>
        </div>
    </div>


@endsection
