<!DOCTYPE html>
<html lang="en">
<title>Agroveterinaria La Salle</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="home.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Lato", sans-serif
  }

  .w3-bar,
  h1,
  button {
    font-family: "Montserrat", sans-serif
  }

  .fa-hospital-o,
  .fa-stethoscope {
    font-size: 200px
  }

  .logo {
    height: 400px;
    width: 400px
  }
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a class="w3-bar-item w3-button w3-padding-large w3-white">Inicio</a>
      <a href="blog.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blog</a>
      <a href="registro_citas_clientes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Programar una cita</a>
      <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Iniciar sesión</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="inicio.php" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
      <a href="blog.php" class="w3-bar-item w3-button w3-padding-large">Blog</a>
      <a href="registro_citas_clientes.php" class="w3-bar-item w3-button w3-padding-large">Programar una cita</a>
      <a href="login.php" class="w3-bar-item w3-button w3-padding-large">Iniciar sesión</a>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-container w3-blue w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">Agroveterinaria La Salle</h1>
    <img src="Images/logo.jpg" id="logo">
    <p class="w3-xlarge">Todo para tu mascota</p>
    <button class="w3-button w3-red w3-padding-large w3-large w3-margin-top"><a href="registro_citas.php">Agendar una cita</a></button>
  </header>

  <!-- First Grid -->
  <div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-twothird">
        <h1>Servicios</h1>
        <h5 class="w3-padding-32">Prestamos servicio de vacunación, procedimientos médicos, peluquería canina-felina y otros servicios.</h5>
        <p class="w3-text-grey">Somos una veterinaria con sentido social, interesados en brindar la mejor experiencia y servicio a nuestros clientes, las mascotas, y a sus papás.</p>

      </div>

      <div class="w3-third w3-center">
        <i class="fa fa-stethoscope w3-padding-64 w3-text-red w3-margin-right"></i>
      </div>
    </div>
  </div>

  <!-- Second Grid -->
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center">
        <i class="fa fa-hospital-o w3-padding-64 w3-text-red"></i>
      </div>

      <div class="w3-twothird">
        <h1>Información de contacto</h1>
        <h5 class="w3-padding-32">Whatsapp: 3172752667<br>Teléfono: 2361571<br>Correo: veterinarialasalle@gmail.com</h5>

        <p class="w3-text-grey">Estamos ubicados en la ciudad de Medellín, barrio La Salle. La dirección es Calle 93 # 42B - 15.<br></p>
      </div>
    </div>
  </div>

  <div class="w3-container w3-red w3-center w3-padding-64">
    <h1 class="w3-margin w3-xlarge">"Hasta que no hayas amado a un animal, una parte de tu alma permanecerá dormida". Anatole France.</h1>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center">
    <div class="w3-xlarge w3-padding-32">
      <a href="https://www.facebook.com/Agroveterinaria-la-Salle-107496250669823/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      <a href="https://wa.me/0343172752667"><i class="fa fa-whatsapp w3-hover-opacity"></i></a>

    </div>
    <p>Agroveterinaria La Salle</p>
  </footer>

  <script src="main.js"></script>

</body>

</html>