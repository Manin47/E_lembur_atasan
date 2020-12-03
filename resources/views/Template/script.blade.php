<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>


<!-- script copy dari admin lte 3  -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/fullcalendar/main.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/fullcalendar-daygrid/main.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/fullcalendar-timegrid/main.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/fullcalendar-interaction/main.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/fullcalendar-bootstrap/main.min.js') }}"></script>
<!-- Page specific script -->


<!-- script fitur lihat password -->
<script type="text/javascript">

	function lihat(){
		let password = document.getElementById('password'),
              button =  document.getElementsByTagName('button')[0];


	 if(button.textContent === 'Lihat Password') { 
	 	password.setAttribute('type','text'); 
	    button.textContent = 'Sembunyikan';
	      }
	  else { 
	  	password.setAttribute('type','password'); 
	  	button.textContent = 'Lihat Password';
	  }
	  return false;
	}
	

</script>
