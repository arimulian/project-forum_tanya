<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card " style="width: 500px">
            <div class="card-header">
                <a href="/profile"><img src="https://img.icons8.com/ios/50/null/long-arrow-left.png"
                        width="20px" /></a>&nbsp;
                Profile
            </div>
            <div class="card-body">

                <form action="{{ url('/edit-profile/'.$profile->id) }}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    {{-- @method("PATCH") --}}
                    <div class="form-outline mb-4">
                        <input type="hidden" name="id" id="id" value="{{$profile->id}}" id="id" />

                        <input type="text" name="name" class="form-control" value="{{$profile->name}}"/>
                        <label class="form-label" for="form4Example1">Nama</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" name="bio" class="form-control" id="form4Example3" rows="4" value="{{$profile->bio}}" style="height:4cm"/>
                        <label class="form-label" for="form4Example1">Biodata</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="alamat" class="form-control" value="{{$profile->alamat}}" />
                        <label class="form-label" for="form4Example2">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="skill" class="form-control" value="{{$profile->skill}}" />
                        <label class="form-label" for="form4Example1">Skill</label>
                    </div>

                    <!-- Checkbox -->
                    {{-- <label class="form-label" for="customFile">Foto Profil</label>
                    <input type="file" name="image" class="form-control" id="customFile"  value="{{$profile->image}}"/>
                    <br> --}}

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-warning btn-block mb-4">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
</body>

</html>
