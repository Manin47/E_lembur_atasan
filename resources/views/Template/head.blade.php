<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E - Data Karyawan </title>
   <!-- jquery nya buat fitur cari live, harus on line -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">

  <!-- css bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

 <!-- js bootstrap -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 <!-- css tabel scrool -->
  <style type="text/css">
        .scroollable {
          
             height: 400px;
            overflow: scroll;
        }
       
       /* cs garis putih */
       hr{
        style="height:2px;
        border-width:0;
        color:gray;
        background-color:white"
       }
    </style>


 <!-- script cari data dengan jquery  -->
 <script type="text/javascript">
        $(document).ready(function(){
             $('#searchlaundry').on('keyup', function () {
                $value=$(this).val();
             //alert('yey');
             $.ajax({
                        type : 'get',
                        url : '{{URL::to('searchlaundry')}}',
                        data:{'searchlaundry':$value},
                        success:function(data){
                            $('tbody').html(data);
                        }
            

             });
        });
       });   
    
    </script>