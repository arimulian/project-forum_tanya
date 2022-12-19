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
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
     <!-- MDB -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
 </head>
 <body>
    <div class="row justify-content-center">
        <div class="col-md-8 bg-white">
            <div class="jarak" style="padding-left:40px;padding-top:20px">
            <div class="card" style="width: 18rem;justify-content:center   ">
                <div class="card-body"> 
                    @forelse ($profile as $item)
                 <img src="{{  url('asset/profile/'.$item->image) }}" width="200px" style="border-radius:100px">
                
                     
                 
                 <p style="text-align: center">{{$item->name}} </p>
                 <br><br> 
                  <a href="/edit-profile/{{$item->id}}" class="btn btn-warning" style="margin-left:39px"><img src="https://img.icons8.com/sf-regular/48/null/pencil.png" width="20px"/>&nbsp edit profil</a>

                </div>
              </div><br>    
              <div class="card" style="width: 42rem;" >
                <ul class="list-group list-group-light">
                <li class="list-group-item px-3" style="">Bio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :{{$item->bio}} </li>
                  <li class="list-group-item px-3">Email &nbsp; : {{$item->alamat}}</li>
                  <li class="list-group-item px-3">Skill &nbsp;&nbsp;&nbsp;&nbsp; : {{$item->skill}}</li>
                </ul>
              </div>
              @empty
              <tr colspan="3">
                <td>No data</td>
            </tr>    
             @endforelse<br><br>
            </div>
        </div>
      </div>  










      
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
 </body>
 </html>
 @endsection