{{-- 
        <!-- Custom Css -->
        <link rel="stylesheet" href="style.css">

        <!-- FontAwesome 5 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <style>
            /* Import Font Dancing Script */
            @import url(https://fonts.googleapis.com/css?family=Dancing+Script);

            * {
                margin: 0;
            }
            /* End */

            /* Sidenav */
            .sidenav {
                background-color: #fff;
                color: #333;
                border-bottom-right-radius: 25px;
                height: 86%;
                left: 0;
                overflow-x: hidden;
                padding-top: 20px;
                position: absolute;
                top: 70px;
                width: 250px;
            }

            .profile {
                margin-bottom: 20px;
                margin-top: -12px;
                text-align: center;
            }

            .profile img {
                border-radius: 50%;
                box-shadow: 0px 0px 5px 1px grey;
            }

            .name {
                font-size: 20px;
                font-weight: bold;
                padding-top: 20px;
            }

            .job {
                font-size: 16px;
                font-weight: bold;
                padding-top: 10px;
            }

            .url,
            hr {
                text-align: center;
            }

            .url hr {
                margin-left: 20%;
                width: 60%;
            }

            .url a {
                color: #818181;
                display: block;
                font-size: 20px;
                margin: 10px 0;
                padding: 6px 8px;
                text-decoration: none;
            }

            .url a:hover,
            .url .active {
                background-color: #e8f5ff;
                border-radius: 28px;
                color: #000;
                margin-left: 14%;
                width: 65%;
            }

            /* End */

            /* Main */
            .main {
                margin-top: 2%;
                margin-left: 29%;
                font-size: 28px;
                padding: 0 10px;
                width: 58%;
            }

            .main h2 {
                color: #333;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 24px;
                margin-bottom: 10px;
            }

            .main .card {
                background-color: #fff;
                border-radius: 18px;
                box-shadow: 1px 1px 8px 0 grey;
                height: auto;
                margin-bottom: 20px;
                padding: 20px 0 20px 50px;
            }

            .main .card table {
                border: none;
                font-size: 16px;
                height: 270px;
                width: 80%;
            }

            .edit {
                position: absolute;
                color: #e7e7e8;
                right: 14%;
            }

            .social-media {
                text-align: center;
                width: 90%;
            }

            .social-media span {
                margin: 0 10px;
            }

            .fa-facebook:hover {
                color: #4267b3 !important;
            }

            .fa-twitter:hover {
                color: #1da1f2 !important;
            }

            .fa-instagram:hover {
                color: #ce2b94 !important;
            }

            .fa-invision:hover {
                color: #f83263 !important;
            }

            .fa-github:hover {
                color: #161414 !important;
            }

            .fa-whatsapp:hover {
                color: #25d366 !important;
            }

            .fa-snapchat:hover {
                color: #fffb01 !important;
            }

            /* End */

        </style>
    </head>

    <body>
      
        <!-- End -->

        <!-- Sidenav -->
        <div class="sidenav">
            <div class="profile">
                <img src="https://imdezcode.files.wordpress.com/2020/02/imdezcode-logo.png" alt="" width="100"
                    height="100">

                <div class="name">
                    ImDezCode
                </div>
                <div class="job">
                    Web Developer
                </div>
            </div>

            <div class="sidenav-url">
                <div class="url">
                    <a href="#profile" class="active">Profile</a>
                    <hr align="center">
                </div>
                <div class="url">
                    <a href="/add-profile">Edit Profile</a>
                    <hr align="center">
                </div>
            </div>
        </div>
        <!-- End -->

        <!-- Main -->
        <div class="main">
            <h2>IDENTITY</h2>
            <div class="card">
                <div class="card-body">
                    <i class="fa fa-pen fa-xs edit" style="color: #000">edit</i>
                    <table>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>ImDezCode</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>imdezcode@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>Bali, Indonesia</td>
                            </tr>
                            <tr>
                                <td>Hobbies</td>
                                <td>:</td>
                                <td>Diving, Reading Book</td>
                            </tr>
                            <tr>
                                <td>Job</td>
                                <td>:</td>
                                <td>Web Developer</td>
                            </tr>
                            <tr>
                                <td>Skill</td>
                                <td>:</td>
                                <td>PHP, HTML, CSS, Java</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

      
        </div>
        <!-- End -->
    </body>

    </html>
 --}}






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
                  <a href="#" class="btn btn-warning" style="margin-left:39px"><img src="https://img.icons8.com/sf-regular/48/null/pencil.png" width="20px"/>&nbsp edit profil</a>

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