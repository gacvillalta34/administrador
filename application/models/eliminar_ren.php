
           

		<html>
    <head><title>
        Eliminar
        </title>
		<link rel="shortcut icon" href="plantilla/Logo/logos.ico">
    </head>
    <body>
	
    
        <form action='eliminar_rent' method="POST" name="form">
		 <div id="registro">
		<table>
	<tr>
             <td><label>Ingrese número placa</label></td>
             </tr>
			  <tr>
			  
       
    <td><input type="text" name="nombre" autocomplete="off" required/> </td>
        </tr>  
		
        
        
			  
     

   </table>
	<br>
   <td><input type="submit" value="Borrar" /> </td>  
   <td><a href="eliminar_ren"><input type="button" value="Cancelar"></a></td>
      </form>
    </body>
</html>

<?php
class Eliminar_ren extends Ci_Model
    {
        public function index(){
			
			
		}
	}
//Conexión a base de datos
	$conect = @mysql_connect('localhost:3306', 'root',"1234") or die(mysql_error());
	mysql_select_db("rentacar",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
if(isset($_POST['nombre']))
{
$nombre = $_POST['nombre'];
$registro = mysql_query("SELECT * FROM rentacar.renta_auto WHERE Placa = '$nombre'", $conect)
        or die ("Problemas al realizar la consulta:".mysql_error());

 $eliminated = mysql_query("DELETE FROM rentacar.renta_auto WHERE Placa = '$nombre'",$conect)
         or die("Problemas al realizar la consulta:".mysql_error());
		 

 $estt='Disponible';
//Obtiene longitud sjlk78



$registros = mysql_query("SELECT * FROM rentacar.vehiculos WHERE Matricula = '$nombre'", $conect) or die("Problemas al realizar la consulta:".mysql_error());

$mod= mysql_query("UPDATE rentacar.vehiculos SET  Status='$estt' WHERE Matricula = '$nombre'");

 
		 //Condición
  if($registros = @mysql_fetch_array($registro)){

					echo '<script> alert("Registro eliminado.");</script>';
					echo '<script> window.location="registros_rent"; </script>';

 

}
 else {

					echo '<script> alert("Registro no eliminado o no existente.");</script>';
					echo '<script> window.location="eliminar_rent"; </script>';
	 
	 
 
 }
 
	
 
			
			}
			
 
	
      
 
	
			
		
	
		
    ?>

