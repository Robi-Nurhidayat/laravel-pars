@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col-md-6 col-lg-7 col-sm-12 ml-4">
        <div>
            <table class="table table-hover table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Item</th>
                    <th>Harga</th>
                    <th>Options</th>
                </tr>
                @foreach ($pricings as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nameItem}}</td>
                    <td>{{$item->price}}</td>
                    <td><a href="{{route('pricing.edit', $item->id)}}" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
            </table>


        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <form action="{{route('pricing.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nama Item</label>
                <input type="text" name="nameItem" class="form-control" value="{{old('nameItem')}}">
                @error('nameItem')
                    <span class="text-success">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" name="price" class="form-control" id="" value="{{old('price')}}">
                @error('price')
                    <span class="text-success">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
</div>

@endsection
