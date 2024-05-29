<?php
require_once __DIR__ . '/../Repositorio/Registro_Analisis_Repositorio.inc';
class Registro_Analisis_Controller
{
    public function registroIngreso()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['categoriaIngreso'], $_POST['monto_ingreso'], $_POST['descripcion_ingreso'], $_POST['fecha_ingreso'])) {
            // Obtener los datos del formulario
            $nombreCategoria = $_POST['categoriaIngreso'];
            $monto = $_POST['monto_ingreso'];
            $descripcion = $_POST['descripcion_ingreso'];
            $fecha = $_POST['fecha_ingreso'];

            // Crear una instancia del modelo Registro_Analisis
            $registroAnalisis = new Registro_Analisis();

            // Llamar a la función registrarIngreso del modelo
            $registroExitoso = $registroAnalisis->registrarIngreso($nombreCategoria, $monto, $descripcion, $_SESSION['IDUsuario'], $fecha);

            // Redireccionar a una página de éxito o mostrar un mensaje
            if ($registroExitoso) {
                // Redirigir a una página de éxito
                header('Location: index.php?ctl=analisisFinanciero');
                exit();
            } else {
                // Mostrar un mensaje de error
                echo "Error al registrar el ingreso.";
            }
        } else {
            // Mostrar el formulario para registrar ingreso
            require_once __DIR__ . '/../../app/plantillas/Registro_Analisis/Ingresos/Ingresos.php';
        }
    }

    public function registroGasto()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['categoriaGasto'], $_POST['monto_gasto'], $_POST['descripcion_gasto'], $_POST['fecha_gasto'])) {
            // Obtener los datos del formulario
            $nombreCategoria = $_POST['categoriaGasto'];
            $monto = $_POST['monto_gasto'];
            $descripcion = $_POST['descripcion_gasto'];
            $idUsuario = $_SESSION['IDUsuario'];
            $fecha = $_POST['fecha_gasto'];

            // Crear una instancia del modelo Registro_Analisis
            $registroAnalisis = new Registro_Analisis();

            // Llamar a la función registrarGasto del modelo
            $registroExitoso = $registroAnalisis->registrarGasto($nombreCategoria, $monto, $descripcion, $idUsuario, $fecha);

            // Redireccionar a una página de éxito o mostrar un mensaje
            if ($registroExitoso) {
                // Redirigir a una página de éxito
                header('Location: index.php?ctl=analisisFinanciero');
                exit();
            } else {
                // Mostrar un mensaje de error
                echo "Error al registrar el gasto.";
            }
        } else {
            // Mostrar el formulario para registrar gasto
            require_once __DIR__ . '/../../app/plantillas/Registro_Analisis/Gastos/Gastos.php';
        }
    }

    public function analisisFinanciero()
    {
        require_once __DIR__ . '/../Repositorio/Registro_Analisis_Repositorio.inc';
        $registroAnalisis = new Registro_Analisis();
        $ingresosPorUsuario = $registroAnalisis->obtenerIngresosPorUsuario($_SESSION['IDUsuario']);
        $gastosPorUsuario = $registroAnalisis->obtenerGastosPorUsuario($_SESSION['IDUsuario']);
        $balanceFinanciero = $registroAnalisis->obtenerBalanceFinancieroPorUsuario($_SESSION['IDUsuario']);
        $ingresosPorCategoria = $registroAnalisis->obtenerIngresosPorCategoria($_SESSION['IDUsuario']);
        $gastosPorCategoria = $registroAnalisis->obtenerGastosPorCategoria($_SESSION['IDUsuario']);
        $ingresosPorMes = $registroAnalisis->obtenerIngresosPorMes($_SESSION['IDUsuario']);
        $gastosPorMes = $registroAnalisis->obtenerGastosPorMes($_SESSION['IDUsuario']);
        require_once __DIR__ . '/../../app/plantillas/Registro_Analisis/AnalisisFinanciero/analisisFinanciero.php';
    }
}
