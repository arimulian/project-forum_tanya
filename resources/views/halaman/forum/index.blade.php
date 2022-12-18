@extends('layouts.main')
@section('title')
Halaman Forum
@endsection
@push('script')
 <script>
     Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
    </script>
@endpush
@section('content')
<div class="container">
     <div class="row">
          <div class="col-2 my-5">
               <ul class="nav nav-tabs d-block">
                    <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="/forum">Forum</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="/category">Tags</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#">profile</a>
                    </li>
               </ul>
          </div>
          <div class="col-8 my-5">
               @auth
               <a class="btn btn-warning bg-gradient mb-2 float-end fw-bold font-monospace" href="/forum/create"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill me-3" viewBox="0 0 16 16">
                         <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                    </svg>Buat Pertanyaan</a>
                    @else 
                    <a class="btn btn-warning bg-gradient mb-2 float-end fw-bold font-monospace" href="/login"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill me-3" viewBox="0 0 16 16">
                         <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                    </svg>Buat Pertanyaan</a> @endauth
               <h1 class="mb-2">Forum</h1>
               <p class="fs-5 mb-4">Tempat Berkomunikasi dengan cara mengajukan pertanyaan atau menjawab sebuah pertanyaan.</p>
               <hr class="mb-5">
               @foreach ($forum as $item)
               <div class="card shadow rounded my-4">
                    <div class="card-body">
                         <h4 class="card-title my-4">{{ $item->question }}</h4>
                         <p class="card-text my-3">{{ $item->description = Str::limit($item, 300, '...') }}
                              <a href="/forum/{{ $item->id }}" class="align-center badge bg-light text-dark bg-gradient shadow-sm rounded">Readmore...</a>
                         </p>
                        
                         <h5>
                              <a href="/forum/{{ $item->id }}"><span class="badge bg-info shadow bg-gradient">{{ $item->category->name }}</span></a>
                         </h5>
                        <div class="my-2">
                         <p class="card-text text-end"><small class="text-muted">Created at {{ $item->created_at }}</small></p>
                         <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" width="30" height="30" class="rounded-circle border float-end mx-2">
                         <p class="card-text text-end"><a class="text-decoration-none" href="#">Username</a></p>
                        </div>
                    </div>
                  
               </div>
               @endforeach
          </div>
          <div class="col-2 my-5">
               <div class="card" style="width: 10rem;">
                    <div class="card-body shadow rounded">
                         <h5 class="card-title">Card title</h5>
                         <hr>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection