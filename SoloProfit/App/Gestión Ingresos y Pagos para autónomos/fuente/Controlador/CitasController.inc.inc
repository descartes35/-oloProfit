<?php
require_once __DIR__ . '/../Repositorio/CitasRepositorio.inc';

class CitasController
{
    public function NuevaCita()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $idUsuario = $_SESSION['IDUsuario']; // Asumiendo que el ID del usuario está en la sesión
            $fechaHora = date('Y-m-d H:i:s', strtotime($_POST['FechaHora'])); // Formatear la fecha y hora
            $descripcion = $_POST['Descripcion'];

            if ((new CitasRepositorio())->agregarCita($idUsuario, $fechaHora, $descripcion)) {
                header('Location: index.php?ctl=VerCitas');
                exit();
            } else {
                echo "Error al agregar la cita.";
            }
        }

        require_once __DIR__ . '/../../app/plantillas/Citas/CitaNueva.php';
    }

    public function VerCitas()
    {
        $citas = (new CitasRepositorio())->obtenerCitasByIdUsuario($_SESSION['IDUsuario']);
        require_once __DIR__ . '/../../app/plantillas/Citas/CitasVer.php';
    }

    public function CitasBorrar()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $citasRepo = new CitasRepositorio();
            if ($citasRepo->borrarCita($id)) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                // Manejo de errores
            }
        }
    }
}
