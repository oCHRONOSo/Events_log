<?php

function validarEvento($titulo, $descripcion, $fecha, $ubicacion) {
    // Validar que el título no esté vacío
    if (empty($titulo)) {
        return false;
    }

    // Validar que la descripción no esté vacía
    if (empty($descripcion)) {
        return false;
    }

    // Validar que la fecha sea válida
    try {
        new DateTime($fecha);
    } catch (Exception $e) {
        return false;
    }

    // Validar que la ubicación no esté vacía
    if (empty($ubicacion)) {
        return false;
    }

    return true;
}

function leerEventos() {
    // Verificar si existe la sesión
    if (!isset($_SESSION['eventos'])) {
        // La sesión no existe, por lo que no hay eventos registrados
        return array();
    }

    // Devolver la lista de eventos de la sesión
    return $_SESSION['eventos'];
}
function registrarEvento($titulo, $descripcion, $fecha, $ubicacion) {
    // Crear un nuevo evento
    $evento = array(
        'titulo' => $titulo,
        'descripcion' => $descripcion,
        'fecha' => $fecha,
        'ubicacion' => $ubicacion,
    );
    $eventos = leerEventos();

    // Agregar el nuevo evento a la lista
    $eventos[] = $evento;

    // Almacenar la lista de eventos en la sesión
    $_SESSION['eventos'] = $eventos;

    return true;
}



function mostrarEventos($eventos) {
    // Verificar si hay eventos registrados
    if (empty($eventos)) {
        // No hay eventos registrados
        echo '<h2 class="display-5 text-light m-4 p-5 border border-1 border-light rounded shadow">No hay eventos registrados.</h2>';
        return;
    }

    // Imprimir una tabla con la lista de eventos
    echo '<div class="container">';
    echo '<table class="table table-dark table-striped table-bordered">';
    echo "<tr><th>Título</th><th>Descripción</th><th>Fecha</th><th>Ubicación</th><th>Acciones</th></tr>";
    foreach ($eventos as $evento) {
        echo "<tr>";
        echo "<td>" . $evento['titulo'] . "</td>";
        echo "<td>" . $evento['descripcion'] . "</td>";
        echo "<td>" . $evento['fecha'] . "</td>";
        echo "<td>" . $evento['ubicacion'] . "</td>";
        echo "<td class='text-center'><form method='post' action='registros.php'><input type='hidden' name='eliminar' value='" . $evento['titulo'] . "'><input class='btn btn-outline-warning' type='submit' value='Eliminar'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo '</div>';
}

function eliminarEvento($titulo) {
    // Obtener la lista de eventos registrados
    $eventos = leerEventos();

    // Buscar el evento a eliminar
    foreach ($eventos as $key => $evento) {
        if ($evento['titulo'] == $titulo) {
            // Eliminar el evento
            unset($eventos[$key]);
            break;
        }
    }

    // Almacenar la lista de eventos actualizada en la sesión
    $_SESSION['eventos'] = $eventos;

    return true;
}

?>