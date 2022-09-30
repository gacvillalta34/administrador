<?php
class Reparar extends Ci_Model
    {
        public function index(){



           

           
            
          
           
        
          
              

        }
        }
      
  ?>

		<title>Registro</title>
		<link rel="shortcut icon" href="plantilla/Logo/logos.ico">
    </head>
    <body bgcolor="GRAY">
        <br>
        <br>
		<meta charset="utf-8">
    <center><h1><font face="Arial">Registro de estados de reparación</h1></font>
    <form action='registro_rep' method="POST">
    <div id="registro">
   <form class="form-horizontal">
    <fieldset>
   
    <tr>
    <td><label>Placa</label></td>
    <td><input type="text" name="nombres"size="80" autocomplete="off" required/> </td>
    </tr>
    <tr>
    <td><label>Fecha de entrega</label></td>
    <td><input type="date" name="fecha"  size="80" autocomplete="off" required/> </td>
    </tr>
    <tr>
    <td><label>Tipo de reparacion</label></td>
    <td><input type="text" name="rep" size="8" autocomplete="off" required/> </td>
    </tr>
    <tr>
    <td><label>Monto</label></td>
    <td><input type="text" name="monto" size="8" autocomplete="off" required/> </td>
    </tr>
	<tr>
    <td><label>Modificar estado</label></td>
	 <td><input type="text" name="mode" size="80" id="En reparación" readonly="readonly" value="En reparación" required/> </td>
</tr>
    
	<br>
        <td><div align="left"><input type="submit" name="Enviar" value="Enviar"/> </td>
		<td><a href='registros_repa'><input type="button" value="Cancelar"></a></td>