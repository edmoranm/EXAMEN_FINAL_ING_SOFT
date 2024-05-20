<?php

require '../../modelos/personas.php';

$ingreso = $_POST['per_ingreso'];
$salida = $_POST['per_salida'];

// VALIDAR INFORMACION
$_POST['per_nombre'] = htmlspecialchars($_POST['per_nombre']);
$_POST['per_prsedencia'] = htmlspecialchars($_POST['per_prosedencia']);
$_POST['per_ingreso'] = filter_var($ingreso, FILTER_VALIDATE_INT);
$_POST['per_salida'] = filter_var($salida, FILTER_VALIDATE_INT);
$_POST['per_motivo'] = htmlspecialchars($_POST['per_motivo']);

if ($_POST['per_nombre'] == '' || $_POST['per_prosedencia'] == '' || $_POST['per_ingreso'] < 0 || $_POST['per_salida'] < 0 || $_POST['per_motivo'== '']  ) {
    // ALERTA PARA VALIDAR DATOS
    $resultado = [
        'mensaje' => 'DEBE VALIDAR LOS DATOS',
        'codigo' => 2
    ];
} else {
    try {
        // REALIZAR CONSULTA
        $persona = new persona($_POST);
        $guardar = $persona->guardar();
        $resultado = [
            'mensaje' => 'PERSONA INSERTADA CORRECTAMENTE',
            'codigo' => 1
        ];
    } catch (PDOException $pe) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR INSERTANDO A LA BD',
            'detalle' => $pe->getMessage(),
            'codigo' => 0
        ];
    } catch (Exception $e) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
            'detalle' => $e->getMessage(),
            'codigo' => 0
        ];
    }
}


$alertas = ['danger', 'success', 'warning'];


include_once '../../templates/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-lg-6 alert alert-<?= $alertas[$resultado['codigo']] ?>" role="alert">
        <?= $resultado['mensaje'] ?>
        <?= $resultado['detalle'] ?>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <a href="../../vistas/personas.php" class="btn btn-primary w-100">Volver al formulario</a>
    </div>
</div>


<?php include_once '../../templates/footer.php'; ?>