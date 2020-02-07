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
                        <!-- SECCION-1 -->
                        <div id="seccion1">
                            <div class="form-group">
                                <input type="text" class="form-control w-100 py-4 border border-dark" placeholder="Nombre(s)" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control py-4 border border-dark" placeholder="Primer apellido" name="first_surname">
                                <input type="text" class="form-control py-4 border border-dark" placeholder="Segundo apellido" name="second_surname">
                                <input type="mail" class="form-control py-4 border border-dark" placeholder="Email" name="email" id="email">
                                <input type="tel" class="form-control py-4 border border-dark" placeholder="Celular / WhatssApp" name="phone" id="phone" maxlength="10">
                                <input type="password" class="form-control py-4 border border-dark" placeholder="Crear contraseña" name="password1">
                                <input type="password" class="form-control py-4 border border-dark" placeholder="Confirmar contraseña" name="password2">
                                <input type="text" class="form-control py-4 border border-dark" placeholder="RFC con el que facturas" maxlength="13" oninput="mayusculas(this);" name="rfc">
                                <div class="d-flex align-items-center">
                                    <label for="" class="w-50 text-center">Porcentaje de acciones: </label>
                                    <input type="text" class="form-control py-4 border border-dark ml-auto mr-0 text-center" style="width:45%;" name="actions" maxlength="2" id="actions">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-5 registro_botones">
                                <a href="#" onclick="window.history.back();" class="text-center"><i class="fas fa-chevron-left"></i> Regresar</a>
                                <button class="text-white py-1 px-5 rounded font-weight-bold text-center" id="continuar_seccion2">Continuar</button>
                            </div>
                        </div>
                        <!-- SECCION-2 -->
                        <div id="seccion2" style="display:none;">
                            <h2>SECCION 2</h2>
                            <a href="#">Regresar</a>
                        </div>
                    </form>
                </div>
                <div></div>
            </div>
        </div>
    </div>



    <!-- ALERTAS -->
    <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
        <div class="toast-header">
            <img src="..." class="rounded mr-2" alt="...">
            <strong class="mr-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <p></p>
        </div>
    </div>
    
    <?php include('includes/footer.php'); ?>

<?php include('includes/principal/foot.php'); ?>