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
               @auth
               <a class="btn btn-warning bg-gradient mb-2 float-end fw-bold font-monospace" href="/category/create"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill me-3" viewBox="0 0 16 16">
                         <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                    </svg>Buat Category</a>
               @else
               <a class="btn btn-warning bg-gradient mb-2 float-end fw-bold font-monospace" href="/login"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill me-3" viewBox="0 0 16 16">
                         <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                    </svg>Buat Pertanyaan</a> @endauth
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
                                   <a class="nav-link active bg-warning bg-gradient btn-sm text-dark  rounded-lg" href="/category/{{$item->id}}">{{ $item->name }}</a>
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