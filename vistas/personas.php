<?php 

include_once '../templates/header.php'; ?>

<h1 class="text-center">FORMULARIO DE INGRESOS</h1>
<div class="row justify-content-center">
    <form action="/EXAMEN_FINAL_ING_SOFT/controladores/personas/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="per_nombre">NOMBRE Y APELLIDO</label>
                <input type="text" name="per_nombre" id="per_nombre" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="per_prosedencia">PROCEDENCIA</label>
                <input type="text" name="per_prosedencia" id="per_prosedencia" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="per_ingreso">FECHA Y HORA DE INGRESO</label>
                <input type="text_hora" name="per_ingreso" id="per_ingreso" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="per_salida">FECHA Y HORA DE SALIDA</label>
                <input type="text_hora" name="per_salida" id="per_salida" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="per_motivo">MOTIVO DEL INGRESO</label>
                <input type="text" name="per_motivo" id="per_motivo" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-success w-100">GUARDAR</button>
            </div>
        </div>

    </form>
</div>
<?php include_once '../templates/footer.php'; ?>