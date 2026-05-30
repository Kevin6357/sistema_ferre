<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empleados</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/dashboard.css">
</head>

<body>

<?php include __DIR__ . '/../layouts/sidebar-dashboard.php'; ?>

<main>

    <nav class="breadcrumb">
        <span>Empleados</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span>Registrar</span>
    </nav>

    <div class="main-content">

        <div class="card">

            <div class="card-header">
                <h2>
                    <i class="fa-solid fa-users"></i>
                    Lista de Empleados
                </h2>
            </div>

            <div class="card-body">

                <table class="table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Celular</th>
                            <th>Cargo</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php foreach($empleados as $empleado): ?>

                        <tr>
                            <td><?= $empleado['id_empleado'] ?></td>
                            <td><?= htmlspecialchars($empleado['nombre'] . ' ' . $empleado['apellido']) ?></td>
                            <td><?= $empleado['dni'] ?></td>
                            <td><?= $empleado['celular'] ?></td>
                            <td><?= $empleado['nombre_cargo'] ?></td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</main>

<script src="<?php echo BASE_URL; ?>/public/js/dashboard.js"></script>

</body>
</html>