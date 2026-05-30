<?php require_once __DIR__ . '/../layouts/header-home.php'; ?>

<div class="container-fluid">

    <!-- TITULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">
            <i class="fa-solid fa-user-plus"></i>
            Registrar Usuario
        </h2>
    </div>

    <!-- CARD -->
    <div class="card shadow border-0 rounded-4">

        <div class="card-body p-4">

            <form action="<?php echo BASE_URL; ?>/usuarios/guardar" method="POST">

                <!-- USUARIO -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Usuario
                    </label>

                    <input
                        type="text"
                        name="nombre_usuario"
                        class="form-control"
                        placeholder="Ingrese usuario"
                        required
                    >
                </div>

                <!-- CONTRASEÑA -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        name="clave"
                        class="form-control"
                        placeholder="Ingrese contraseña"
                        required
                    >
                </div>

                <!-- ROL -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Rol
                    </label>

                    <select name="roles" class="form-select">
                        <option value="admin">Admin</option>
                        <option value="superadmin">Super Admin</option>
                    </select>
                </div>

                <!-- BOTONES -->
                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Guardar Usuario
                    </button>

                    <a href="<?php echo BASE_URL; ?>/dashboard" class="btn btn-secondary">
                        <i class="fa-solid fa-arrow-left"></i>
                        Volver
                    </a>

                </div>

            </form>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layouts/footer-home.php'; ?>   