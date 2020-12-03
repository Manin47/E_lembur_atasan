
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
      table.scroll th, td {width:1%;padding:8px;}
     /* table.scroll th {background-color:#000099;color:#ffffff;}*/
     /* table.scroll tr:hover td {background:#a0a0a0;color:#ffffff;}
      table.scroll tr:nth-child(odd) {background-color:#c0c0c0;}
      table.scroll tr:nth-child(even) {background-color:#f0f0f0;}*/
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

            <h1> Data Karyawan </h1>  <br>
               <a href="{{ route('export-data') }}"  class="btn btn-danger">
                  <i class="fas fa-file-export"></i>
                      Export Ke Excel
           </a> <br> <br>


          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li >
                  <form action="{{ route('import-nya')}}"  method="post" enctype="multipart/form-data">
          
                      {{ csrf_field() }}

                      <label>Pilih File Excel</label>
                      <div class="form-group">
                        <input type="file" name="file" required="required">
                      </div>

                          <button type="submit" class="btn btn-primary">
                              <i class="fas fa-file-import"></i>
                                 Import
                          </button>
                  </form>

             </li>
             
              <!-- <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

     <!-- /.login-box alert -->
     


    <div class="container">

   

        


          


    <div class="container">  
    <div class="col-md-3-mt-12">
          	 @if ($message = Session::get('success'))
		          <div class="alert alert-success alert-block">
		           <button type="button" class="close" data-dismiss="alert">×</button> 
		          <strong>{{ $message }}</strong>
		         </div>
		         @endif
          </div>
          
    <br>
    Cari  <input type="text" placeholder="Masukan Nama Karyawan " width="80px" size="50" id="searchlaundry" > 
            <i class="fas fa-search"></i>
              <br> <br> 
            

            <!-- <a href="{{ url('hapus-semua-data') }}" class="btn btn-danger" onclick="return confirm('yakin ingin hapus semua datanya ?')">
                Hapus Semua Data 
             </a> -->
            <!-- tabel kedua -->
        
            <div class="scroollable">
            <table class="table scroll">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No </th>
                  <th scope="col">Nama Karyawan </th>
                  <th scope="col">Nik Karyawan</th>
                  <th scope="col">Golongan</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Department</th>
                  <th scope="col">Nama Perusahaan</th>
                  <th scope="col">Aksi </th>
                </tr>
              </thead>
              <tbody>
              <?php $nomor = 1; ?>

              @foreach ($data as $ini)
                <tr>
                  <th scope="row">{{ $nomor++ }}</th>
                  <td>{{ $ini->nama_karyawan }}</td>
                  <td>{{ $ini->nik_karyawan }}</td>
                  <td>{{ $ini->golongan }}</td>
                  <td>{{ $ini->jabatan_karyawan }}</td>
                  <td>{{ $ini->department }}</td>
                  <td>{{ $ini->cabang_pt }}</td>
                  <td>
                    

                          <a href="{{ url('hapus') }}/{{ $ini->nik_karyawan }}" class="btn btn-danger btn-sm m-1" onclick="return confirm('yakin ingin hapus data nya')">
                             <i class="fas fa-trash-alt"></i>
                               Hapus 
                          </a>  

                         <a href="{{ url('edit') }}/{{ $ini->nik_karyawan }}/edit" class="btn btn-warning btn-sm m-1"> 
                           <i class="fa fa-edit" ></i>
                                Edit
                         </a>
                        
                        <!-- cetak data -->
							      		<a href="{{ url('cetak-perdata') }}/{{ $ini->nik_karyawan }}" target="_blank" class="btn btn-success btn-sm m-1">
                             <i class="fas fa-print"></i>
                                 Cetak 
                        </a>

                          <!-- detail -->
                          <a href="{{ url('detail') }}/{{ $ini->nik_karyawan }}"  class="btn btn-success  btn-sm m-1"> 
                           <i class="fas fa-info-circle"></i>
                               Detail 
                        </a>
                    
                    
                  </td>
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
