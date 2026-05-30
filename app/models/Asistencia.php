<?php
require_once __DIR__ . '/../core/Database.php';

class Asistencia
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function registrar(int $id_empleado): void
    {
        $sql = "INSERT INTO asistencia(fecha,hora_entrada,hora_salida,estado,id_empleado)
                VALUES(CURDATE(), NOW(), null, 'asistio', ?)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id_empleado]);
    }

    public function obtenerAsistencias()
    {
        $sql = "SELECT
                    a.id_asistencia,
                    a.fecha,
                    a.estado,
                    CONCAT(e.nombre, ' ', e.apellido) AS empleado
                FROM asistencia a
                INNER JOIN empleado e
                    ON a.id_empleado = e.id_empleado
                ORDER BY a.id_asistencia DESC";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}