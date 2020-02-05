<?php include('includes/principal/head.php'); ?>

    <!-- NAVBAR -->
    <?php include('includes/navbar.php'); ?>

    <div class="row m-0 mt-4">
        <div class="formulario_registro col-lg-10 m-auto">
            <div>
                <h2 class="font-weight-bold m-0">Aprobación Crédito Empresarial</h2>
                <p>Ingresa los siguientes datos y en un momento sabrás si tu financiamiento ha sido pre-autorizado</p>
            </div>
            <div class="col-lg-12 p-0">
                <div class="rounded col-lg-8 p-4 registro_info">
                    <h3 class="m-0 font-weight-bold">¡Bienvenido a nucleo capital!</h3>
                    <p class="m-0 py-3">Favor de llenar los datos de registro</p>
                    <form action="">
                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control w-100 py-4 border border-dark" placeholder="Nombre(s)">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control py-4 border border-dark" placeholder="Primer apellido">
                                <input type="text" class="form-control py-4 border border-dark" placeholder="Segundo apellido">
                                <input type="mail" class="form-control py-4 border border-dark" placeholder="Email">
                                <input type="phone" class="form-control py-4 border border-dark" placeholder="Celular / WhatssApp">
                                <input type="password" class="form-control py-4 border border-dark" placeholder="Crear contraseña">
                                <input type="password" class="form-control py-4 border border-dark" placeholder="Confirmar contraseña">
                                <input type="text" class="form-control py-4 border border-dark" placeholder="RFC con el que facturas" maxlength="13" oninput="mayusculas(this);">
                                <div class="d-flex align-items-center">
                                    <label for="" class="w-50 text-center">Porcentaje de acciones: </label>
                                    <input type="text" class="form-control py-4 border border-dark ml-auto mr-0" style="width:45%;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-5 registro_botones">
                                <a href="#" onclick="window.history.back();" class="text-center"><i class="fas fa-chevron-left"></i> Regresar</a>
                                <a href="#" class="text-white py-1 px-5 rounded font-weight-bold text-center">Continuar</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div></div>
            </div>
        </div>
    </div>


    <?php include('includes/footer.php'); ?>

<?php include('includes/principal/foot.php'); ?>