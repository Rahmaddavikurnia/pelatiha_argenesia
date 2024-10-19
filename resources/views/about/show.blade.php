@extends('admin.admin')

@section('content')

 <div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail About</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="title">Judul : </label>
            <p>{{ $about->judul }}</p>
          </div>
          <div class="form-group">
            <label for="description">Deskripsi : </label>
            <p>{{ $about->deskripsi }}</p>
          </div>
          <a href="{{ route('about.index') }}" class="btn btn-primary">Back to list</a>
        </div>
      </div>
    </div>
  </div>
 </div>



@endsection