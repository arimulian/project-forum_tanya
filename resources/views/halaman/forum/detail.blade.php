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
               <div class="my-5">
                    <div class="media-body">
                         <h3 class="text-start">{{ $item->question }}</h3>
                    </div>
                    <div class="card mb-3">
                         <div class="card-body">
                              <p class="card-text">{!! $item->description !!}</p>

                         </div>
                         @if ($item->image)
                         <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid">
                    </div>
                    @else

                    @endif
               </div>
               <hr>

               @endforeach
               <form action="" method="post">
                    <div class="form-floating">
                         <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                         <label for="floatingTextarea2">Bantu Jawab</label>
                         <button type="submit" class="btn btn-primary btn-sm my-4">Primary</button>
                    </div>
               </form>
          </div>

     </div>
</div>
</div>
@endsection