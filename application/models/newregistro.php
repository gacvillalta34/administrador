<?php
class Newregistro extends Ci_Model
    {
        public function index(){



           

           
            
          
           
        
          
              

        }
        }
      
  ?>
    <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Perfil</h4>
         
		 <table>
		 <tr>
		 
		 
			<th>Usuario</th> <td><?php

		$conect = @mysql_connect('localhost:3306', 'root',"1234") or die(mysql_error());
	mysql_select_db("rentacar",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");

if(isset($_SESSION['Users'])) {
	 	echo $_SESSION['Users'].' <p>';
			
					?>
		 </td>
		 </tr>
		 <tr>
		 <th>Cargo</th>
		  <td><?php
				$conect = @mysql_connect('localhost:3306', 'root',"1234") or die(mysql_error());
	mysql_select_db("rentacar",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");

	$query = "SELECT * FROM rentacar.usuario_owner";
	$resultado = mysql_query($query);
	while($fila = @mysql_fetch_array($resultado))
	{
	
		
				  echo"$fila[Cargo]
				  ";
					
					
	}
		 
		 
		 ?>
		 <?php
		 
	
}
else if(isset($_SESSION['users'])) {
	
	 	echo $_SESSION['users'].' <p>';
		 
					?>
		 </td>
		 </tr>
		

</div>
</body>
</html>
<?php
}
else{
		
	
}


					
			
		 
		 
		 ?>
		 </td>
		 </tr>
		 </table>
		 
         <hr>
       
        </div>
      </div>
   </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    	<div align="center">
     <h6 class="w3-opacity">Registros de rentas</h6>
	 </div>
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              
			 
			  
			  
			   <!-- Right Column and conection to database for get the all result of the tables -->
    
  <div class="w3-col m2">
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <span>Inversión:</span>
       
		  <div class="panel-content">
						<div class="row">
					
							
		<!--php-->
								<div class="col-md-3 col-sm-6">
								<div class="number-chart">
								<br>
									<?php
								?>
									<div class="number"><span><?php $sql = mysql_query("SELECT SUM(Monto) from rentacar.renta_auto");
	
	 $resultado = @mysql_result($sql, 0);
	 $nombre_format_francais = number_format($resultado, 2, '.', ',');
	 echo"$$nombre_format_francais";
	 
	
	
	?>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
         
        </div>
      </div>

            
            </div>
          </div>
        </div>
      </div>
      
      


 <div class="w3-row-padding" style="margin:0 -16px">
          
        </div>
      
      </div>
      
<div class="w3-container w3-card-2 w3-white w3-round w3-margin">
	  <?php
   $conect = @mysql_connect('localhost:3306', 'root',"1234") or die(mysql_error());
	mysql_select_db("rentacar",$conect)or die("No se encontró la base de datos");
                mysql_query ("SET NAMES 'utf8'");
	
	$query = "SELECT * FROM rentacar.renta_auto";
	$resultado = mysql_query($query);
	while($fila = mysql_fetch_array($resultado))
	{
		
		echo"
<table class='table table-striped table-hover'>
<thead>
<th>Id</th>
<td>$fila[Id]</td>
</tr>
<tr>
<th>Dui</th>
<td>$fila[Dui]</td>
<tr>
<th>Reservación</th>
<td>$fila[Fecha]</td>
</tr>
<tr>
<th>Inicia</th>
<td>$fila[Fecha_I]</td>
</tr>
<tr>
<th>Termina</th>
<td>$fila[Fecha_F]</td>
</tr>
<tr>
<tr>
<th>Marca</th>
<td>$fila[Marca]</td>
</tr>
<tr>
<th>Modelo</th>
<td>$fila[Modelo]</td>   
</tr>
<tr>

<th>Día</th>
<td>$fila[Dia]</td>
   </tr>
<tr>

<th>Matrícula</th>
<td>$fila[Placa]</td>
   </tr>
   
 
   <tr>
<th>Costo</th>
";
$res = $fila['Monto'];
 $nombre_format_francais = number_format($res, 2, '.', ',');
 ?>
<td><?php echo "$$nombre_format_francais";
	
	}?></td>
   </tr>
   
</thead>