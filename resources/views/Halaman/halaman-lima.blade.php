
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
       <h2> Input Data Lembur </h2>

       <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Hari / Tanggal</label>
            <div class="col-sm-10">
                <input type="date" id="start" name="tanggal_lembur" class="form-control"
                      value="2018-07-22"
                      min="2018-01-01" max="3000-12-31">
            </div>    
          </div>

          

           <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Department </label>
                <div class="col-sm-10">
                    <select name="department" class="form-control"> 
                      <option value='Finance Accounting' selected="selected">Finance Accounting</option>
                      <option value='Trade Marketing'>Trade Marketing</option>
                      <option value='Production'>Production</option>
                      <option value='Logistic'>Logistic</option>
                      <option value='Quality Control'>Quality Control</option>
                      <option value='Maintenance'>Maintenance</option>
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Group </label>
                <div class="col-sm-10">
                    <select name="group" class="form-control"> 
                      <option value='Finance Accounting' selected="selected">Produksi 1</option>
                      <option value='Trade Marketing'>Produksi 2</option>
                      <option value='Production'>Produksi 3</option>
                     
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Shift  </label>
                <div class="col-sm-10">
                    <select name="group" class="form-control"> 
                      <option value='Finance Accounting' selected="selected">Shift  1</option>
                      <option value='Trade Marketing'>Shift 2</option>
                      <option value='Production'>Shift 3</option>
                     
                    </select>
                </div>
              </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="nik">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="nama">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Alasan Lembur</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="alasan_lembur">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Mulai Dari Jam</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="mulai_dari_jam">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Selesai </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="sampai_jam">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Total Jam Lembur</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="total_jam">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Poin</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="poin">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <button type="button" class="btn btn-success form-control"> Submit </button>
            </div>
          </div>

         

        </form>

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


