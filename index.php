<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="fronentd/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fronentd/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="fronentd/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="fronentd/css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="fronentd/css/estilocartas.css">
	<link rel="stylesheet" type="text/css" href="fronentd/css/login.css">
</head>
<body class="bg-light" background="fronentd/img/carga.jpg">
	<section>

		<div class="row g-0">
			<div class="col-lg-7 d-none d-lg-block">
					  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						  <div class="carousel-indicators">
						    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						  </div>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="fronentd/img/CIRCULO-MILITAR.jpg" class="d-block w-100" alt="...">
						      <div class="carousel-caption d-none d-md-block">
						        <h5>First slide label</h5>
						        <p>Some representative placeholder content for the first slide.</p>
						      </div>
						    </div>
						    <div class="carousel-item">
						      <img src="fronentd/img/Circulo 2.jpg" class="d-block w-100 " alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="fronentd/img/circulo 1.jpg" class="d-block w-100 " alt="...">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>
			</div>

			<div class="col-lg-5  flex-column align-items-end min-vh-100">
				<div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
					<img src="" alt="" class="img-fluid">
				</div>

				<div class="px-lg-5 py-lg-4 p-4 w-100  align-self-center">
					<h1 class="text-dark font-weight-bold mb-4">Bienvenido de vuelta</h1>
					<form action="backend/login.php" method="POST">
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label font-weight-bold text-light">Usuario</label>
					    <input type="text" class="form-control bg-dark-x border-0 validated text-gray-dark" aria-describedby="emailHelp" placeholder="Ingresa tu nombre de usuario" name="usu" id="usu" required maxlength="30">
					    <div id="emailHelp" class="form-text">Usuario especial dado por la empresa</div>
					  </div>
					  <div class="mb-4">
					    <label for="exampleInputPassword1" class="form-label font-weight-bold text-light">Password</label>
					    <input type="password" class="form-control bg-dark-x border-0 mb-2 validate" id="pass" placeholder="Ingresa tu contraseña" name="pass" required maxlength="30">
					    <a id="passhelp" class="form-text text-muted text-decoration-none" href="#" title="Recuperar">¿Has olvidado tu contraseña?</a>

					  </div>
					
					  <button type="submit" class="btn btn-primary w-100" id="enviar" name="enviar">Ingresar<i class="bi bi-person-circle"></i></button>
					</form>
				</div>
				
			</div>
		</div>
		
	</section>
	<script src="fronentd/js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
	
hola 
jejejejjej
</body>
</html>