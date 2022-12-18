@extends('layouts.main')
@push('style')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<style>
     trix-toolbar [data-trix-button-group="file-tools"] {
          display: none;
     }
</style>
@endpush
@push('script')
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<script>
     document.addEventListener('trix-file-accept', function(e) {
          e.preventDefault();
     })
</script>
@endpush
@section('content')
<div class="container">
     <h3 class="my-5">Buat Pertanyaan Kepada Publik</h3>
     <div class="my-4">
          <form action="{{ route('forum.store') }}" method="POST">
               @csrf
               <div class="form-group">
                    <label class="mb-2" for="question">Pertanyaan</label>
                    <input type="text" name="question" value="{{ old('question') }}" class="form-control @error('question') is-invalid @enderror">
                    @error('question')
                    <div class="invalid-feedback">
                         {{ $message }}
                    </div>
                    @enderror
               </div>
               <div class="form-group my-3">
                    <label class="mb-2" for="description">Deskripsi</label>
                    @error('description')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                    <trix-editor input="description"></trix-editor>
               </div>
               <div class="form-group my-3">
                    <label class="mb-2" for="category">Tags</label>
                    <select class="form-select " name="category_id">
                         @foreach ($categories as $item)
                         @if (old('category_id') == $item->id)
                         <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                         @else
                         <option value="{{ $item->id }}">{{ $item->name }}</option>
                         @endif
                         @endforeach
                    </select>
               </div>
               <div class="form-group my-3">
                    <label class="mb-2" for="description">Image</label>
                    <div class="input-group mb-3">
                         <label class="input-group-text" for="inputGroupFile01">Upload</label>
                         <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
               </div>
               <button type="submit" class="btn btn-primary mt-4">Submit</button>
               <a href="/post" class="btn btn-danger mt-4">Back</a>
          </form>
     </div>
</div>
@endsection