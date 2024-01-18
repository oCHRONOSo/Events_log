<!DOCTYPE html>
<html lang="es">
<?php
// inicializar la session y incluir funciones.php
session_start();
require 'funciones.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  // El formulario se ha enviado, procesar los datos
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $fecha = $_POST['fecha'];
  $ubicacion = $_POST['ubicacion'];

  // Validar el evento
  if (validarEvento($titulo, $descripcion, $fecha, $ubicacion)) {
    // Registrar el evento
    registrarEvento($titulo, $descripcion, $fecha, $ubicacion);  
  }
}
$eventos = leerEventos();
$numero = count($eventos);
?>


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

  <title>Inicio</title>
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
            <a class="nav-link" href="./registros.php">Registros 
                <?php
                if ($numero != 0) {
                  echo '<span class="badge text-bg-warning mx-2">'.$numero.'</span>';
                } ?>
              </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <h1 class="display-4 text-center text-light">Registro de eventos</h1>
  </svg>
  <br>
  <div class="container-fluid p-5 col-sm-10 bg-dark border border-1 border-light rounded shadow">

    <h2 class="display-5 text-light"><i class="bi bi-calendar-event pe-3"></i> Agregar evento </h2>

    </span>
    <br>
    <form class="row g-3" action="index.php" method="post">
      <div class="col-md-6">
        <label for="titulo" class="form-label text-light">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
      </div>

      <div class="col-md-6">
        <label for="descripcion" class="form-label text-light">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"
          required></textarea>
      </div>

      <div class="col-md-6">
        <label for="fecha" class="form-label text-light">Fecha</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
      </div>

      <div class="col-md-6">
        <label for="ubicacion" class="form-label text-light">Ubicación</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicación" required>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-success py-2 my-4">Registrar</button>
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          echo '<span class="text-light mx-3"> Añadido correctamente !</span>';
        }
        ?>
      </div>
    </form>

</body>

</html>