@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-md-6 col-lg-6 ml-5 mt-5">
        <form action="{{route('pricing.update',$pricing->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Nama Item</label>
                <input type="text" name="nameItem" class="form-control" value="{{old('nameItem') ?? $pricing->nameItem}}">
                @error('nameItem')
                    <span class="text-success">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" name="price" class="form-control"  value="{{old('price') ?? $pricing->price}}">
                @error('price')
                    <span class="text-success">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                   Delete
                </button>
            </div>
        </form>
    </div>
</div>


<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">apakah anda yakin menghapus data dengan nama item {{$pricing->nameItem}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
            <form action="{{route('pricing.destroy',$pricing->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection
