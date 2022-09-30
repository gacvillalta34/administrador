<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="plantilla/assets1/AdminLTE-master/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="plantilla/assets1/AdminLTE-master/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="plantilla/assets1/AdminLTE-master/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plantilla/assets1/AdminLTE-master/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plantilla/assets1/AdminLTE-master/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plantilla/assets1/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plantilla/assets1/AdminLTE-master/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plantilla/assets1/AdminLTE-master/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plantilla/assets1/AdminLTE-master/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
		<?php
		$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
		mysql_select_db("biblioteca",$conect)or die("No se encontró la base de datos");
        mysql_query ("SET NAMES 'utf8'");
		$usuario = $_SESSION["usuario"];
		$query = "SELECT * FROM usuarios_administradores WHERE usuario = '$usuario'";
		$resultado = mysql_query($query);
		$row = @mysql_fetch_array($resultado);
		$_SESSION["funcion"] = $row['funcion']; 
		$_SESSION["usuario"] = $row['usuario']; 
		?>
        <a href="inicio" class="logo"><b><?php echo $_SESSION["usuario"];?></b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="plantilla/images/U-Teams.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $_SESSION["funcion"];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="plantilla/images/U-Teams.png" class="img-circle" alt="User Image" />
                    <p>
                     <?php echo $_SESSION["funcion"];?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="panel" class="btn btn-default btn-flat" class="alerta">Cerrar sesión</a>
					   <script>
		  $(".alerta").on('click', function(e){
				e.preventDefault();
				var href = this.href;
				alertify.confirm("¿Deseas cerrar sesión?", function (e) {
					if (e) {
						window.location.href = href;
					}
				});
			});
			</script>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
	  <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="busqueda" class="form-control" placeholder="Buscar"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="inicio">
                <i class="fa fa-home text-red"></i> <span>Inicio</span></i>
              </a>
            </li>
			 <li class="treeview">
              <a href="#">
                <i class="fa fa-user-md text-white"></i>
                <span>Consultas</span>
               <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="precios_consultas"><i class="fa fa-money  text-lime"></i>Precios</a></li>
                <li><a href="horarios_consultas"><i class="fa fa-clock-o  text-blue"></i>Horarios</a></li>
              </ul>
            </li>
			 <li class="treeview">
              <a href="especialidades">
                <i class="fa fa-list-alt text-yellow"></i> <span>Especialidades</span></i>
              </a>
            </li>
			<li class="treeview">
              <a href="inicio">
                <i class="fa fa-mobile text-maroon"></i> <span>Contáctanos</span></i>
              </a>
            </li>
			</ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plantilla/assets1/AdminLTE-master/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plantilla/assets1/AdminLTE-master/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plantilla/assets1/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plantilla/assets1/AdminLTE-master/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plantilla/assets1/AdminLTE-master/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plantilla/assets1/AdminLTE-master/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plantilla/assets1/AdminLTE-master/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plantilla/assets1/AdminLTE-master/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plantilla/assets1/AdminLTE-master/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plantilla/assets1/AdminLTE-master/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plantilla/assets1/AdminLTE-master/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="plantilla/assets1/AdminLTE-master/dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="plantilla/assets1/AdminLTE-master/dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="plantilla/assets1/AdminLTE-master/dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>