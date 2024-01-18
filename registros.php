<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>Registros</title>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bienvenidos !</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./registros.php">Registros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h1 class="display-4 text-center text-light">Registro de eventos</h1>
  <br>
  <?php 
    session_start();
    include 'funciones.php'; // Incluir el archivo de funciones
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['eliminar'])) {
          // Se ha enviado una solicitud de eliminación
          $tituloEliminar = $_POST['eliminar'];
          eliminarEvento($tituloEliminar);

          // Mostrar la lista actualizada de eventos
          $eventos = leerEventos();
          mostrarEventos($eventos);
        }
    }else{
        $eventos = leerEventos();
        mostrarEventos($eventos);
    }    
    
  
  ?>

</body>
</html>