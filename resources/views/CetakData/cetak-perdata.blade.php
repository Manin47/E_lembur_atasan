<!DOCTYPE html>
<html>
<head>
	<title> cetak perdata</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<style type="text/css">
   .kecil {
       width:50px;
       text-align:left;
   }
</style>
</head>
<body>

<h1 align="center" > Data Personal Karyawan </h1> <br> <br>

<div class="container" align="center" >
   <table  cellpadding="0" cellspacing="0">
     <thead>
       <tr>
         <th> </th>
         <th> </th>
         <th> </th>
         <th> </th>
        </tr>
     </thead>
     @foreach ($data as $sss)

       
         <!-- batas -->
         <tr>
          <td></td>
          <td>    <br> <strong> Data Karyawan : </strong></td>
          <td>  </td>
          <td></td>
          <tr>


          <tr>
          <td></td>
          <td>NIK</td>
          <td> : </td>
          <td>{{ $sss->nik_karyawan }}</td>
        </tr>

        <tr>
          <td></td>
          <td> Golongan</td>
          <td> : </td>
          <td>{{ $sss->golongan }}</td>
        </tr>

        <tr>
          <td></td>
          <td>Jabatan</td>
          <td> : </td>
          <td>{{ $sss->jabatan_karyawan }}</td>
        </tr>
        <tr>
          <td></td>
          <td>Department</td>
          <td> : </td>
          <td>{{ $sss->department }}</td>
        </tr>
        <tr>
          <td></td>
          <td>Divisi</td>
          <td> : </td>
          <td>{{ $sss->divisi }}</td>
        </tr>
        <tr>
          <td></td>
          <td>Nama Karyawan</td>
          <td> : </td>
          <td>{{ $sss->nama_karyawan }}</td>
        </tr>
        <tr>
          <td></td>
          <td>Jenis Kelamin</td>
          <td> : </td>
          <td>{{ $sss->jenis_kelamin }}</td>
        </tr>

         <tr>
          <td></td>
          <td>Tanggal Lahir</td>
          <td> : </td>
          <td>{{ $sss->tanggal_lahir }}</td>
          <tr>

          </tr>

          <td></td>
          <td>Pendidikan </td>
          <td> : </td>
          <td>{{ $sss->pendidikan_terakhir }}</td>
        </tr>
       
         <tr>
          <td></td>
          <td>Perusahaan </td>
          <td> : </td>
          <td>{{ $sss->cabang_pt }}</td>
          <tr>

         

             
         <!-- batas -->
         <tr>
          <td></td>
          <td>    <br> <strong>  </strong></td>
          <td>  </td>
          <td></td>
          <tr>
        @endforeach
     <tbody>
     </tbody>


   </table>
</div>


    
  
  
   <script type="text/javascript">
   	 window.print();
   </script>
</body>
</html>
