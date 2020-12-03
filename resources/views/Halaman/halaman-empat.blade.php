
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('Template.head')

    <!-- css scroll -->
    <style type="text/css">
        .scrollable {
          
            height: 400px;
            overflow: scroll;
        }
        .kepala {
           width: 800px;
           color: blue;
        }
        img {
            border-radius: 100%;
        }
        .hitung{
            z-index: 999;
            left: 420px;
            top: -160px;
        }
    </style>
    

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
     @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">halaman dua </h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <!--   <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

        
    <div class="container"> 

       
      <!-- alert -->
      <div class="container"> 
         <div class="col-md-3-mt-12">
             @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
             </div>
             @endif
          </div> 
      </div>


          <h1>  Informasi Akun </h1> <br>
          <a href="{{ url('buat-akun') }}" class="btn btn-success">
             <i class="fas fa-address-book"></i>
                 Tambah Akun
         </a> <br> <br>
           
           <div class="scrollable"> 
                    <table class="table ">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">NIK </th>
                  <th scope="col">Nama </th>
                    <th scope="col">level</th>
                  <th scope="col">Password</th>
                   <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php $nomor = 1; ?>

              @foreach ($data as $ini)
                <tr>
                  <th scope="row">{{ $ini->nik_user }}</th>
                  <td>  {{ $ini->name }}</td>
                   <td>  {{ $ini->level }}</td>
                     <td>  {{ $ini->password }}</td>
                  <td>
                       <button class="btn btn-warning sm-1"  onclick="return confirm('yakin ingin hapus data nya')"> 
                        <a href="{{ url('hapus-user', $ini->id) }}" >
                            <i class="fas fa-trash-alt">  Hapus</i> 
                            
                       </a> 
                       </button>
                           <br> <br>
                        <a href="{{ url('edit-user', $ini->id) }}" class="btn btn-info sm-1">
                           <i class="fa fa-edit" > Edit </i>
                            
                       </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
           </div>
      
    </div>


    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    

            </div>
          

           


         
          
         

     
       <!-- akhir tabel data -->
    </div>
    

     

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Template.script')

</body>
</html>
