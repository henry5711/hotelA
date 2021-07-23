<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body >
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="prinadmin.php"> <img src="../img/logo_sinf.png" width="46" height="33" class="d-inline-block align-top" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="prinadmin.php">Home</a>
        </li>
      
          <button class="btnteam luz text-dark btn btn btn-outline-secondary">🌙</button>
           
          <li class="nav-item dropdown sini">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo  $_SESSION['nombreusuario'];    ?> <i class="fas fa-user"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../../backend/destructordesesssiones.php">Cerrar session</a></li>
            
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</body>
</html>