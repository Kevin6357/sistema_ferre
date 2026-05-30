<?php

require_once __DIR__ . '/../core/Controller.php';

class UsuariosController extends Controller {

    public function index(): void {

        $this->registrar();

    }

    public function registrar(): void {

        if (!isset($_SESSION['usuario'])) {

            header('Location: ' . BASE_URL . '/login');
            exit;

        }

        $this->view('usuarios/registrar', [
            'usuario' => $_SESSION['usuario']
        ]);

    }

    public function roles(): void {

        $this->view('usuarios/roles', [
            'usuario' => $_SESSION['usuario']
        ]);

    }

    public function reportes(): void {

        $this->view('usuarios/reportes', [
            'usuario' => $_SESSION['usuario']
        ]);

    }

}