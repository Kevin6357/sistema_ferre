<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras - <?php echo TITLE_BUSINESS; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/dashboard.css">
</head>

<body>

<?php include __DIR__ . '/../layouts/sidebar-dashboard.php'; ?>

<main>

    <nav class="breadcrumb">
        <span>Inicio</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span>Compras</span>
    </nav>

    <div class="main-content">

        <div class="card">

            <div class="card-header">
                <h2>
                    <i class="fa-solid fa-cart-shopping"></i>
                    Lista de Compras
                </h2>
            </div>

            <div class="card-body">

                <table class="table">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Proveedor</th>
                            <th>Fecha</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php foreach ($compras as $compra): ?>

                        <tr>
                            <td><?= $compra['id_compra'] ?></td>
                            <td><?= htmlspecialchars($compra['proveedor']) ?></td>
                            <td><?= $compra['fecha_compra'] ?></td>
                            <td>S/ <?= number_format($compra['total'], 2) ?></td>
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