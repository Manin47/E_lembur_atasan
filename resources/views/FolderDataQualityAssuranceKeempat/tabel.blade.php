
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

          
       <h2> Tabel Data Lembur D Department Quality Assurance   </h2>

           
       <div class="scroollable">
            <table class="table scroll">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">NIK </th>
                  <th scope="col">Golongan</th>
                  <th scope="col">Hari</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Shift</th>
                  <th scope="col">Alasan </th>
                  <th scope="col">Aksi  </th>
                </tr>
              </thead>
              <tbody>
              @foreach ($data as $ini)
              <tr>
                <th scope="row">{{ $ini->nik_karyawan_foregin }}</th>
                <td>{{ $ini->golongan }}</td>
                <td>{{ $ini->hari_lembur }}</td>
                <td> {{ $ini->tanggal_lembur }}</td>
                <td> {{ $ini->shift }}</td>
                <td> {{ $ini->alasan_lembur }}</td>
                <td>
                      <!-- <a href="{{ url('approve-quality-assurance-kedua') }}/{{ $ini->id_lembur }}" class="btn btn-success"> 
                          <i class="fas fa-check-square"></i>
                              Approve 
                      </a>

                      <a href="{{ url('reject-quality-assurance-kedua') }}/{{ $ini->id_lembur }}"  onclick="return confirm('yakin ingin di Reject')" class="btn btn-danger"> 
                          <i class="fas fa-window-close"></i>
                            Reject 
                      </a> -->
                </td>
              </tr>
                @endforeach
              </tbody>
            </table> 
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


