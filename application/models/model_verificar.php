<?php
class Model_verificar extends Ci_Model
    {
        public function index(){
			session_start();
	$conect = @mysql_connect('localhost:3306', 'root',"") or die(mysql_error());
		mysql_select_db("biblioteca",$conect)or die("No se encontró la base de datos");
					mysql_query ("SET NAMES 'utf8'");
	if(isset($_SESSION['Usuario'])) {
		//Comprobamos si esta definida la sesión 'tiempo'.
	if(isset($_SESSION['tiempo']) ) {
    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 1800;//30min en este caso.
    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];
        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();              
            //Redirigimos pagina.
            header("Location: login");
            exit();
        } else {  // si no ha caducado la sesion, actualizamos
            $_SESSION['tiempo'] = time();
        }
	} else {
    //Activamos sesion tiempo.
    $_SESSION['tiempo'] = time();
	}
	?>
	<?php
	}
	else{
		echo '<script> window.location="login"; </script>';
	}
        }
        }
        ?>	
