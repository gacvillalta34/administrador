 <link rel="shortcut icon" href="plantilla/Logo/logo.png">
 <?php
session_start();
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="becas-2021-nuevo-ingreso";
if(isset($_SESSION['Usuario'])) {
	 ?>
</div>
</body>
</html>
<?php
}else{
	echo '<script> alert("No ha iniciado sesión.");</script>';
		echo '<script> window.location="login"; </script>';
}
?>
<?php
class Panel extends Ci_Controller
    {
        public function index(){
            $data = array ('title' => 'Home', 'mensaje');
           $this->load->view("viewlogout");
		   }
        } 
		?>
		<?php

session_destroy();
echo 'Cerraste sesión';
echo '<script> window.location="login"; </script>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saliendo...</title>
	<meta charset="utf-8">
</head>
<body>
<script language="javascript">location.href = "home";</script>
</body>
</html>



<!-- Header 

$hoy = getdate();
print_r($hoy);
?>
-->