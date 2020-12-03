
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('Template.head')

   <!-- css scroll tabel  -->
    <style type="text/css">
      table.scroll {width:100%;border:1px #a9c6c9 solid;font:12px verdana,arial,sans-serif;color:#333333;}
      table.scroll thead {display:table;width:100%;}
      table.scroll tbody {display:block;height:300px;overflow:auto;float:left;width:100%;}
      table.scroll tbody tr {display:table;width:100%;}
      table.scroll th, td {width:60%;padding:8px;}
     /* table.scroll th {background-color:#000099;color:#ffffff;}*/
     /* table.scroll tr:hover td {background:#a0a0a0;color:#ffffff;}
      table.scroll tr:nth-child(odd) {background-color:#c0c0c0;}
      table.scroll tr:nth-child(even) {background-color:#f0f0f0;}*/

       img {
            border-radius: 10px;
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
             <!--  <li class="breadcrumb-item"><a href="#">Home</a></li>
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

      <!-- tabel kedua -->
       <a href="{{ url('create-foto')}}" class="btn btn-success"> 
           <i class="fas fa-plus-square"></i>
           Tambah data
       </a> 

        <br>  <br>
       <h1> Data Iklan </h1>
            <div class="scroollable">
            <table class="table scroll">
              <thead class="thead-dark">
                <tr>
                
                  <th scope="col">Keterangan </th>
                  <th scope="col">Foto </th>
                  <th scope="col">Action</th>
                 
                </tr>
              </thead>
              <tbody>
              <?php $nomor = 1; ?>

              @foreach ($data as $ini)
                <tr>

                  <th scope="row">{{ $ini->keterangan }}</th>
                  <td>
                     <a href="{{ asset('img/'.  $ini->file ) }}"> Lihat Gambar </a> <br>
                     <img src="{{ asset('img/'.  $ini->file ) }}" height="40%" width="40%">
                  </td>
                  <td>
                       <button class="btn btn-warning sm-1"  onclick="return confirm('yakin ingin hapus data nya')"> 
                        <a href="{{ url('delete-gambar', $ini->id_gambar) }}" >
                            <i class="fas fa-trash-alt">  </i> 
                             Hapus
                       </a>
                       </button>

                       <!-- <a href="{{ url('edit-gambar', $ini->id_gambar) }}" class="btn btn-info"> 
                          Edit , belum
                       </a> -->
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
    </div>
   



     <!-- /.login-box alert -->
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
  
     
