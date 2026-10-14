<?php
$error = null;
$incidencias = [];
try {
    require __DIR__ . '/conexion.php';
    $incidencias = $pdo->query('SELECT id, usuario, equipo, descripcion, fecha FROM incidencias ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);
} catch (Throwable $e) {
    http_response_code(503);
    $error = 'No se pudo conectar con la base de datos.';
}
function e($valor) { return htmlspecialchars((string)$valor, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Incidencias del aula</title><link rel="stylesheet" href="estilos.css"></head>
<body><main><h1>Incidencias del aula</h1><p>Listado de incidencias registradas</p>
<?php if ($error): ?><p class="error"><?= e($error) ?></p><?php else: ?>
<table><thead><tr><th>ID</th><th>Usuario</th><th>Equipo</th><th>Descripción</th><th>Fecha</th></tr></thead><tbody>
<?php foreach ($incidencias as $fila): ?><tr><td><?= e($fila['id']) ?></td><td><?= e($fila['usuario']) ?></td><td><?= e($fila['equipo']) ?></td><td><?= e($fila['descripcion']) ?></td><td><?= e($fila['fecha']) ?></td></tr><?php endforeach; ?>
</tbody></table><?php endif; ?></main></body></html>
