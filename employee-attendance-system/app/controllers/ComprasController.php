<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Compra.php';

class ComprasController extends Controller
{
    public function index()
    {
        header('Location: ' . BASE_URL . '/compras/registrar');
        exit;
    }

    public function registrar()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        $modelo = new Compra();

        $compras = $modelo->obtenerCompras();

        $this->view('compras/index', [
            'usuario' => $_SESSION['usuario'],
            'compras' => $compras
        ]);
    }

    public function reportes()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        $modelo = new Compra();

        $compras = $modelo->obtenerCompras();

        $this->view('compras/reportes', [
            'usuario' => $_SESSION['usuario'],
            'compras' => $compras
        ]);
    }

    public function proveedores()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        require_once __DIR__ . '/../models/Proveedor.php';

        $modelo = new Proveedor();

        $proveedores = $modelo->obtenerProveedores();

        $this->view('compras/proveedores', [
            'usuario' => $_SESSION['usuario'],
            'proveedores' => $proveedores
        ]);
    }

    public function eliminar($id)
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        $modelo = new Compra();

        $modelo->eliminar((int)$id);

        header('Location: ' . BASE_URL . '/compras/registrar');
        exit;
    }
}