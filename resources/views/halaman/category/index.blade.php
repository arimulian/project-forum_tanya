@extends('layouts.main')
@section('title')
Halaman Tags
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
               <h1 class="mb-2">Tags</h1>
               <p class="fs-5">Gunakan tags untuk mengkategorikan pertanyaan kamu dengan pertanyaan yang mirip dengan orang lain.</p>
               <div class="input-group mb-5">
                    <input type="text" class="form-control" placeholder="Ketik untuk mencari Tags..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button type="submit" class="input-group-text btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                         </svg>Telusuri</button>
               </div>
               <hr>
               <!-- card -->
               <div class="row">
                    @foreach ($category as $item)
                    <div class="card ms-4 shadow rounded my-4 " style="width: 14rem;">
                         <div class="card-body">
                              <h6 class="card-title">
                                   <a class="nav-link active bg-warning bg-gradient btn-sm text-dark  rounded-lg" href="#">{{ $item->name }}</a>
                              </h6>
                              <p class="card-text text-truncate">{{ $item->description }}</p>
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