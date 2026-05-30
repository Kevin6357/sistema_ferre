<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Empleado.php';

class EmpleadosController extends Controller
{
    public function registrar()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        $modelo = new Empleado();

        $empleados = $modelo->obtenerEmpleados();

        $this->view('empleados/registrar', [
            'usuario' => $_SESSION['usuario'],
            'empleados' => $empleados
        ]);
    }

    public function reportes()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        $modelo = new Empleado();

        $empleados = $modelo->obtenerEmpleados();

        $this->view('empleados/reportes', [
            'usuario' => $_SESSION['usuario'],
            'empleados' => $empleados
        ]);
    }
}