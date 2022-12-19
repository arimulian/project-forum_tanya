@extends('layouts.main')
@section('title')
Halaman Detail Kategori
@endsection
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
               <h2 class="mb-2">{{ $categories->name }}</h2>
               <p class="text-muted">{{ $categories->description }}</p>
               <div class="input-group mb-5">
                    <input type="text" class="form-control" placeholder="Ketik untuk mencari Tags..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button type="submit" class="input-group-text btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                         </svg>Telusuri</button>
               </div>
               <hr>
               <!-- card -->
               <div class="row">
                    @foreach ($categories->forums as $item)
                    <div class="card shadow rounded my-4">
                         <div class="card-body">
                              <h4 class="card-title my-4">{{ $item->question }}</h4>
                              <p class="card-text my-3">{{ $item->description}}
                                   <a href="/forum/{{ $item->id }}" class="align-center badge bg-light text-dark bg-gradient shadow-sm rounded">Readmore...</a>
                              </p>

                              <h5>
                                   <a href="#"><span class="badge bg-info shadow bg-gradient">{{ $item->category->name }}</span></a>
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
               <!-- endCard -->
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