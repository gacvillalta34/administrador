<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="plantilla/assets14/theme/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="plantilla/assets14/theme/assets/vendor/font-awesome/css/font-awesome.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="plantilla/assets14/theme/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="plantilla/assets14/theme/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
  <link rel="shortcut icon" href="plantilla/assets1/images/logo-imju.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="plantilla/assets1/images/logo-imju.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="plantilla/assets1/images/logo-imju.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="plantilla/assets1/images/logo-imju.jpg">
  <link rel="apple-touch-icon-precomposed" href="plantilla/assets1/images/logo-imju.jpg">
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box">
					<div class="content">
						<div class="header">
							<div class="logo text-center"><img src="plantilla/assets1/images/logo-alcaldía.jpg" alt="DiffDash" height="200" width="300"></div>
							<p class="lead">INICIAR SESION</p>
						</div>
						<form class="form-auth-small" action="login" method="post">
						<div align="center">
							<div class="form-group">
								<label>USUARIO:</label>
								<input type="text" autocomplete="off" class="form-control" id="signin-user" placeholder="Ingrese usuario" name="user" required/>
							</div>
							<div class="form-group">
								<label>CONTRASEÑA:</label>
								<input type="password" autocomplete="off" class="form-control" id="signin-password" placeholder="Ingrese contraseña" name="pw" required/>
							</div>
							<button type="submit" class="btn btn-success" name="login">INGRESAR</button>
							<button class="btn btn-default"><a href="registro">REGISTRARSE</a></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
