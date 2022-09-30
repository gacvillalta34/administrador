	<!--
					Codigo html para botones
					-->
					<html> 
    <title>Tablas</title>
	<link rel="shortcut icon" href="plantilla/Logo/logos.ico">
	<link rel="stylesheet" type="text/css" href="plantilla/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="plantilla/alertifyjs/css/themes/default.css">

	<script src="plantilla/jquery/jquery-3.2.1.min.js"></script>
	<script src="plantilla/alertifyjs/alertify.js"></script>
	<meta charset="utf-8">
	<br>
	<br>
	<br>
	<br>
	<br>
	  <h3><div align="center">Tabla de registros de automóviles</h3>
	
  <table border='0'>
	
	
<div class="flexsearch">
		<div class="flexsearch--wrapper">
			<form class="flexsearch--form" action="buscar"  method="post">
				<div class="flexsearch--input-wrapper">
				<form> 
					<td><input type="text" name ="idsearch" size ="25"placeholder="Buscar registro por marca" autocomplete="off"></td>
					<td><input class="flexsearch--submit" type="submit" value="Buscar"/></td>
				</div>
				
			</form>
		</div>
</div>
	<td> <a href='new_autos'><input type="button" value="Nuevo registro"> </a></td>
   
  <td><a href='eliminar_autos' class="alert"><input type="button" value="Eliminar"> </a></td>
     
	<script type="text/javascript">
	

			$(".alert").on('click', function(e){
    e.preventDefault();
    var href = this.href;
    alertify.confirm("¿Quieres ingresar al formulario de eliminación?", function (e) {
        if (e) {
            window.location.href = href;
        }
    });
});
</script>
    <td><a href='editar_autos'><input type="button" value="Editar"> </a> </td>

	<td><input type="button" value="Imprimir" onClick="window.print()"/> </td>
	</table>

  
    </div>
  <br>
    <br>
</html>
   
    
    
    
</body>
<footer>
</footer>
<?php
class Aut2 extends Ci_Model
    {
        public function index(){



           

             
              

        }
        }
		?>
     