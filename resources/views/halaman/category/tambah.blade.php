@extends('layouts.main')
@section('content')
<div class="container">
     <h3 class="my-5">Buat Tags</h3>
     <div class="my-4">
          <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                    <label class="mb-2" for="name">Nama</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <div class="invalid-feedback">
                         {{ $message }}
                    </div>
                    @enderror
               </div>
               <div class="form-group my-3">
                    <label class="mb-2" for="floatingTextarea2">Deskripsi</label>
                    <textarea class="form-control" name="description" id="floatingTextarea2" style="height: 100px"></textarea>
                    @error('description')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
               </div>
               <button type="submit" class="btn btn-primary mt-4">Submit</button>
               <a href="/forum" class="btn btn-danger mt-4">Back</a>
          </form>
     </div>
</div>
@endsection