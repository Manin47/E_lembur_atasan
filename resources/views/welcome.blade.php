<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        @include('Template.head')

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .hitung{
            z-index: 999;
            left: -420px;
            top: -160px;
                 }
           
        </style>



    </head>
    <body>
    <br> <br>
   
      <div class="container">
        <div class="row">
             <div class="col-md-12">
              <!-- <h1 align="center"> Buat Akun </h1>

              <small align="center" id="emailHelp" class="form-text text-muted">Jika Sudah Punya Akun Silahkan Login </small>  
                    <form method="POST" action="{{ url('reg') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" name="nik_user" class="form-control"  required>
                      
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="name" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" required>
                      
                    </div>

                    <label for="exampleInputEmail1">Level</label>
                      <select class="custom-select" name="level">
                            <option selected value="user">Karyawan/ User </option>
                            <option value="admin">Admin</option> 
                        </select> 

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <small id="emailHelp" class="form-text text-muted">Minimal length 8 </small>

                        <button type="button" onclick="lihat();" class="btn btn-warning">Lihat Password</button>
                    </div>

                    
                  
                    <button type="submit" class="btn btn-primary">Buat Akun</button>
                    <br>
                    <br>
                    <br>
                            
                   </form>
             </div> -->

             <div class="col-md-12">
               <h1 align="center"> Login </h1> <br> <br>
                
                <div class="container">
                      <div class="content">
                    <img src=" {{ asset('GambarTaro/tps_food.jpg')}}" alt="">
                      <div class="title m-b-md">
                          <!-- Laravel -->
                      </div>

                      <div class="links">
                          <div class="social-auth-links text-center mb-3">
                              <a href="{{ url('login') }}"  class="btn btn-primary  btn-lg btn-block" >Login </a>
                          </div> 
                      </div>
                </div>
              
                
            </div>
             </div>
        </div>
      </div>
    
    
    </body>

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
    


</html>
