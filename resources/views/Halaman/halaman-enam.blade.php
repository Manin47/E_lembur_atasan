
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('Template.head')
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

     <!-- /.login-box alert -->
     <div class="col-md-3-mt-12">
          	 @if ($message = Session::get('success'))
		          <div class="alert alert-success alert-block">
		           <button type="button" class="close" data-dismiss="alert">×</button> 
		          <strong>{{ $message }}</strong>
		         </div>
		         @endif
          </div>


    <div class="container">

   
       
    <br>
          <!-- tabel ke tiga -->
          <h2> Data Keluarga </h2>

          <div class="scroollable">
          <table class="table">
              <thead class="thead-dark">
                <tr>
                   <th scope="col">No </th>
                   <th scope="col">Nama Ayah Kandung</th>
                  <th scope="col">Nama Ibu Kandung</th>
                  <th scope="col">Nama Saudara Kandung</th>
                  <th scope="col">Nama Suami / Istri</th>
                  <th scope="col">Nama Anak Kandung</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($data as $ini)
                <tr>
                  <th scope="row">1</th>
                  <td>{{ $ini->nama_ayah_kandung }}</td>
                  <td>{{ $ini->nama_ibu_kandung }}</td>
                  <td>{{ $ini->nama_saudara_kandung }}</td>
                  <td>{{ $ini->nama_suami_istri }}</td>
                  <td>{{ $ini->nama_anak_kandung }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
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


