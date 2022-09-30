
<!-- End footer Sectio-->

		
				<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
							
								<div class="content">
						<center><h1><font face="Arial">Registro de renta</h1></font>
   
	   <form action='agregar' method="POST" name="form">
    <div id="registro">
   <form class="form-horizontal">
    <fieldset>
   
    <tr>
	<td>
<select name="dui">
   <option selected value="0">Seleccione su Dui </option>
     
    </td> <?php
   
		$conect = @mysql_connect('localhost:3306', 'root',"1234") or die(mysql_error());
	mysql_select_db("rentacar",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
				if(isset($_SESSION['Dui'])){
?>
      <td>
       <option name="dui"><?php echo"$_SESSION[Dui]";
	
	}
				
				?></option></td>
				
	   
        
	     </tr>
		 </select>
	<tr>
   <td><label>Fecha de reservación</label></td>
    <td><input type="date" name="fecha" size="80" autocomplete="off" required/> </td>
    </tr>
	<tr>
    <td><label>Días a utilizar</label></td>
    <td><input type="text" name="dias" size="80" autocomplete="off" required/> </td>
    </tr>
		<tr>
    <td><label>Fecha de inicio</label></td>
    <td><input type="date" name="fechai" size="80" autocomplete="off" required/> </td>
    </tr>
	<tr>
    <td><label>Fecha final</label></td>
    <td><input type="date" name="fechaf" size="80" autocomplete="off" required/> </td>
    </tr>
	
							
								</header>
							
									
								</div>
							</div>
						</div>
						</div>
						<div>
							<div class="box">
								
								<div class="content">
									<header class="align-center">
									 <tr>
    <td><label>Marca</label></td>
	
<td>
<select name="marc">
   <option selected value="0">Seleccione la marca </option>
     <?php
   
		$conect = @mysql_connect('localhost:3306', 'root',"1234") or die(mysql_error());
	mysql_select_db("rentacar",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
				if(isset($_POST['placa'])){
$codigo = $_POST['placa'];
	;
	$query = "SELECT * FROM rentacar.vehiculos WHERE Matricula = '$codigo'";
	$resultado = mysql_query($query);
	if($fila = mysql_fetch_array($resultado))
	{
		?>
      <td>
       <option name="marc"><?php echo"$fila[Marca]";
	
	}
				}?></option></td>
	   
        
	     </tr>
		 </select>
      
    
	<tr>
    <td><label>Modelo</label></td>
	  <?php
   
		$conect = @mysql_connect('localhost:3306', 'root',"1234") or die(mysql_error());
	mysql_select_db("rentacar",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
				if(isset($_POST['placa'])){
$codigo = $_POST['placa'];
	;
	$query = "SELECT * FROM rentacar.vehiculos WHERE Matricula = '$codigo'";
	$resultado = mysql_query($query);
	if($fila = mysql_fetch_array($resultado))
	{
		?>
	<td>
     <select name="Model">
 <option selected value="0">Seleccione el modelo </option>
       
       <option name="Model"><?php echo"$fila[Modelo]";
	
	}
				}?></option></td>
	   
     
	     </tr>
		 </select>
		
		
</optgroup>	    

    <tr>
 <td><label>Matricula</label></td>
   <?php
   
	$conect = @mysql_connect('localhost:3306', 'root',"1234") or die(mysql_error());
	mysql_select_db("rentacar",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
				if(isset($_POST['placa'])){
$codigo = $_POST['placa'];
	;
	$query = "SELECT * FROM rentacar.vehiculos WHERE Matricula = '$codigo'";
	$resultado = mysql_query($query);
	if($fila = mysql_fetch_array($resultado))
	{
		?>
	<td>
     <select name="idvehiculo">
   <option selected value="0">Seleccione según el modelo que escogió </option>
       
       <option name="idvehiculo"><?php echo"$fila[Matricula]";
	   }
				}?></option></td>
	   
	   
	   
	     </tr>
		 </select>
       
	   
	<tr>
	 <td><label>Monto</label></td>
	   <?php
   
		$conect = @mysql_connect('localhost:3306', 'root',"1234") or die(mysql_error());
	mysql_select_db("rentacar",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
				if(isset($_POST['placa'])){
$codigo = $_POST['placa'];
	;
	$query = "SELECT * FROM rentacar.vehiculos WHERE Matricula = '$codigo'";
	$resultado = mysql_query($query);
	if($fila = mysql_fetch_array($resultado))
	{
		?>
		
		 <td>
<select name="monto">
   <option selected value="0">Precio</option>
    
       <option name="monto"><?php echo"$fila[Renta]";
	}
				}
				?></option></td>
      
			 
		   
		   
	     </tr>
		
     
	   
  </select>
		
		<?
	}
	else{
		
		
	}
	?>

	

	
    </table>
	<br><br>
	<br>
        <td><div align="left"><input type="submit" name="Enviar" value="Enviar"/> </td>
		<td><a href='cars'><input type="button" value="Cancelar"></a></td>
		</form>
									</header>
									
									
								</div>
							</div>
						</div>
						</section>
	<?php
class Agregar extends Ci_Model
    {
        public function index(){



           

           
            
          
           
        
          
              

        }
        }
		if(isset($_POST['dui']))
{
 $iden = $_POST['dui'];
 $fech=$_POST['fecha'];
$fechi=$_POST['fechai'];
$fechf=$_POST['fechaf'];
$mar =$_POST['marc'];
$mod =$_POST['Model'];
$idvehicul=$_POST['idvehiculo'];
$dia = $_POST['dias'];
$mont=$_POST['monto'];


$registros = @mysql_query("SELECT * FROM rentacar.renta_auto WHERE Placa = '$idvehicul'");

if($registro = @mysql_fetch_array($registros)){
	echo '<script> alert("Vehículo en uso, favor de seleccionar otro.");</script>';
					echo '<script> window.location="buscar"; </script>';
}
 
	


else{

$mul = $mont * $dia;
$res = $mul;
		

//Obtiene longitud sjlk78
$reg = (strlen($iden) * strlen($fech) *strlen($fechi) *strlen($fechf) * strlen($mar) * strlen($mod)* strlen($idvehicul) * strlen($dia)*
strlen($res)) or die ("No se han llenado todos los campos");


//Ingresar data a la tabla
//"alumnos" es el nombre de la tabla creada dentro de la base de datos
mysql_query("INSERT INTO rentacar.renta_auto (Dui, Fecha, Fecha_I, Fecha_F, Marca, Modelo, Placa, Dia, Monto)
VALUES ('$iden','$fech', '$fechi','$fechf', '$mar', '$mod','$idvehicul', '$dia', '$res')",$conect) or die (mysql_error());


 	
 
echo '
    
<script> alert("El registro ha sido guardado.");</script>';
 	echo '<script> window.location="factura"; </script>';
	

 }
 //Condición actualizar el estado cuando se haga una renta
 if(isset($_POST['idvehiculo']))
{
$codigo = $_POST['idvehiculo'];
$est="Ocupado";
$registro = mysql_query("SELECT * FROM rentacar.vehiculos WHERE Matricula = '$codigo'", $conect) or die("Problemas al realizar la consulta:".mysql_error());

$mod= @mysql_query("UPDATE rentacar.vehiculos SET Status = '$est' where Matricula = '$codigo'");

       if($registro = @mysql_fetch_array($registro)){
	
					echo '<script> alert("Registro modificado.");</script>';
					echo '<script> window.location="factura"; </script>';

 
   }
 else {

					echo '<script> alert("Registro no  modificado.");</script>';
					echo '<script> window.location="cars"; </script>';
	 
	 
 
 }
 
	
 
}
}






        ?>
 
        

