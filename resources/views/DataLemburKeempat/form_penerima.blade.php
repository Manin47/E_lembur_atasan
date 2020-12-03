
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

          
       <h2> Approve Data  D </h2>

       <form  method="POST" action="{{ url('simpan-pindah-ke-e') }}/{{ $data->id_lembur}}">
       @csrf
         

         <!-- ini ambil data dari tabel user -->
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label"> NIK </label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="nik_karyawan_foregin" value="{{ $data->nik_karyawan_foregin }}" readonly>
            </div>
          </div>
          
         


           <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Golongan </label>
                <div class="col-sm-10">
                    <select name="golongan" class="form-control" value="{{ $data->golongan }}"> 
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
                <label for="department" class="col-sm-2 col-form-label"  > Hari  </label>
                <div class="col-sm-10">
                    <select name="hari_lembur" class="form-control" value="{{ $data->hari_lembur }}"> 
                      <option value='libur' selected="selected"> Libur </option>
                      <option value='biasa'> Biasa</option> 
                    </select>
                </div>
              </div>


               <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"> Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" id="start" name="tanggal_lembur" class="form-control"
                    value="{{ $data->tanggal_lembur }}"
                          min="2018-01-01" max="3000-12-31">
                </div>    
              </div>



              <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Shift  </label>
                <div class="col-sm-10">
                    <select name="shift" class="form-control" value="{{ $data->shift }}"> 
                      <option value='1' selected="selected"> 1 </option>
                      <option value='2'> 2</option> 
                      <option value='3'> 3</option> 
                      <option value='Day Shift'> Day Shift</option> 
                    </select>
                </div>
              </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label"> Alasan Lembur </label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="alasan_lembur" value="{{ $data->alasan_lembur }}">
            </div>
          </div>

          <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Mulai  </label>
                <div class="col-sm-10">
                    <select name="mulai_dari_jam" class="form-control" value="{{ $data->mulai_dari_jam }}"> 
                      <option value='12' selected="selected"> 12 </option>
                      <option value='13'> 13</option> 
                      <option value='14'> 14</option> 
                      <option value='15'> 15</option> 
                      <option value='16'> 16</option> 
                      <option value='17'> 17</option> 
                      <option value='18'> 18</option> 
                    </select>
                </div>
              </div>


              <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Selesai  </label>
                <div class="col-sm-10">
                    <select name="sampai_jam" class="form-control" value="{{ $data->sampai_jam }}"> 
                      <option value='12' selected="selected"> 12 </option>
                      <option value='13'> 13</option> 
                      <option value='14'> 14</option> 
                      <option value='15'> 15</option> 
                      <option value='16'> 16</option> 
                      <option value='17'> 17</option> 
                      <option value='18'> 18</option> 
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label"> Total Jam </label>
                <div class="col-sm-10">
                  <input type="number" class="form-control"  name="total_jam" max="8" min="1" value="{{ $data->total_jam }}">
                </div>
              </div>



              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label"> Poin </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  name="poin" value="{{ $data->poin }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label"> Insentif </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  name="insentif" value="{{ $data->insentif }}" >
                </div>
              </div>

         

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <button type="submit" class="btn btn-success form-control">
               <i class="fas fa-check-square"></i>
                    Approve 
             </button>
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


