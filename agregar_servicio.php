<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se han recibido los datos esperados del formulario
    if (isset($_POST['nombre']) && isset($_FILES['foto']) && isset($_POST['descripcion'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        // Obtener información del archivo de imagen
        $fotoNombre = $_FILES['foto']['name'];
        $fotoTipo = $_FILES['foto']['type'];
        $fotoTamanio = $_FILES['foto']['size'];
        $fotoTmpNombre = $_FILES['foto']['tmp_name'];

        // Ruta donde se almacenarán las imágenes (ajusta esto según tu estructura de carpetas)
        $rutaImagen = 'img/' . $fotoNombre;

        // Mover el archivo de la ubicación temporal a la carpeta deseada
        move_uploaded_file($fotoTmpNombre, $rutaImagen);

        // Aquí deberías realizar la validación y procesamiento de los datos antes de la inserción en la base de datos

        // Luego, realiza la inserción en la base de datos
        include_once 'conexion.php'; // Asegúrate de que este archivo esté en la ubicación correcta

        if (Servicio::agregarServicio($nombre, $fotoNombre, $descripcion)) {
            // Éxito en la inserción
            echo json_encode(['status' => 'success', 'message' => 'Servicio agregado correctamente']);
        } else {
            // Fallo en la inserción
            echo json_encode(['status' => 'error', 'message' => 'Error al agregar el servicio']);
        }
    } else {
        // Datos incompletos
        echo json_encode(['status' => 'error', 'message' => 'Datos incompletos']);
    }
} else {
    // Método no permitido
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
}
?>
