<?php
// --- guardar.php ---

// Verificamos si hay datos enviados por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturamos los datos del formulario
    $form_data = [
        'nombre' => $_POST['nombre'] ?? '',
        'apellido' => $_POST['apellido'] ?? '',
        'correo' => $_POST['correo'] ?? '',
        'telefono' => $_POST['telefono'] ?? ''
    ];

    // Ruta del archivo JSON
    $json_file = 'datos.json';

    // Leemos los datos actuales (si existen)
    if (file_exists($json_file)) {
        $contenido = file_get_contents($json_file);
        $datos = json_decode($contenido, true);
        if (!is_array($datos)) {
            $datos = [];
        }
    } else {
        $datos = [];
    }

    // Agregamos el nuevo registro
    $datos[] = $form_data;

    // Guardamos de nuevo el JSON bonito
    file_put_contents($json_file, json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo "✅ Datos guardados correctamente.";
} else {
    echo "❌ No se recibieron datos por POST.";
}
?>
