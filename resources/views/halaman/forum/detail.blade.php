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
               @foreach ($forums as $item)
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
               @foreach ($forums as $item)
               @foreach ($item->answer->where('question_id', $item->id) as $data)
               <div class="card mb-3">
                  <div class="card">
                      <h5 class="card-title mx-2">{{ $data->username }}</h5>
                      <p class="card-text mx-3">{{ $data->answer_text }}</p>
                      <p class="card-text mx-3 mb-3"><small class="text-muted">{{ $data->created_at }}</small></p>
                    </div>
                  </div>
               @endforeach
               @endforeach

               <hr>

               <form action="/answer/{{ $item->id }}" method="post">
                    @method('post')
                    @csrf
                    <div class="form-floating">
                         <textarea class="form-control" name="answer_text" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                         <label for="floatingTextarea2">Bantu Jawab</label>
                         <button type="submit" class="btn btn-primary btn-sm my-4">Primary</button>
                    </div>
               </form>

               @endforeach
          </div>

     </div>
</div>
</div>
@endsection