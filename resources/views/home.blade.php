@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-6 col-lg-6 ml-5 mt-5">
            @if (session()->has('sukses'))
                <div class="text-success">{{session()->get('sukses')}}</div>
            @endif
            <div class="card">
                <div class="card-title">Welcome to home</div>
                <div class="card-body"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus temporibus voluptate, inventore voluptates earum aliquam possimus totam cum ad ut quod ea ipsum quidem obcaecati. Culpa sunt autem numquam dolorem.</p></div>
            </div>
        </div>
    </div>
@endsection
