<?php
include_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Implementa la lógica para eliminar la fila con el ID proporcionado
    $eliminado = Servicio::eliminarServicio($id);

    if ($eliminado) {
        // Devuelve una respuesta exitosa
        echo json_encode(['success' => true]);
    } else {
        // Devuelve una respuesta de error si la eliminación falló
        echo json_encode(['error' => 'Error al intentar eliminar el servicio']);
    }
} else {
    // Devuelve una respuesta de error si no se proporcionan datos adecuados
    echo json_encode(['error' => 'Invalid request']);
}
?>
