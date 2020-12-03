
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
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
       <div class="container">

        <!-- alert -->
        <div class="col-md-3-mt-12">
             @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
             </div>
             @endif
          </div>

          
       <h2> Pilih Atasan Department </h2> <br>

       <div class="container">
         <div class="row">

          <ul>
                <li> <a href="{{ route('input-data-lembur') }}"  class="btn btn-outline-primary " >Atasan  Unit Procurement </a> </li> 
                <li>   <a href="{{ route('input-data-lembur-supplay-chain') }}"  class="btn btn-outline-primary" > Supplay Chain</a> </li> 
                <li>   <a href="{{ route('input-data-lembur-hr-gal') }}" class="btn btn-outline-primary" > HR & GAL</a> </li>
                <li>   <a href="{{ route('input-data-lembur-quality-assurance') }}" class="btn btn-outline-primary" > Quality Assurance </a> </li>
                <li>   <a href="" class="btn btn-outline-primary" > Production</a> </li>
                <li>   <a href="" class="btn btn-outline-primary" > Quality Control </a> </li>
                <li>   <a href="" class="btn btn-outline-primary"> Maintenance </a> </li>
                <li>   <a href="" class="btn btn-outline-primary"> Finance </a> </li>
                <li>   <a href="" class="btn btn-outline-primary"> Accounting </a> </li>
                <li>   <a href="" class="btn btn-outline-primary"> Industrial Performance </a> </li>
          </ul>

         </div>
       </div>

       </div>
       


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


