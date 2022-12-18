@extends('layouts.main')
@section('title')
Halaman Forum
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
               @foreach ($forum as $item)
               <div class="media my-5">
                    <!-- {{-- <img src="..." class="mr-3" alt="..."> --}} -->
                    <div class="media-body">
                         <h3 class="text-start">{{ $item->question }}</h3>
                         <p class="text-start">{!! $item->description !!}</p>
                    </div>
               </div>
          </div>
          @endforeach
     </div>
</div>
</div>
@endsection