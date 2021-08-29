@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-md-6 col-lg-6 ml-5 mt-5">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="{{route('login')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control">
                        @error('email')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control">
                        @error('password')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
