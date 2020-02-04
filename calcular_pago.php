<?php include('includes/principal/head.php'); ?>

    <div class="calcular_pago principal">
        <!-- NAVBAR -->
        <?php include('includes/navbar.php'); ?>

        <div class="creditos mt-4">
            <div class="row">
                <div class="col-lg-6 p-0 mb-5">
                    <h4 class="font-weight-bold pb-1">Calcula tu pago</h4>
                    <div class="calcular_info bg-white rounded fuente_base">
                        <div class="pb-4">
                            <h5 class="font-weight-bold pl-5 m-0 py-4">Crédito Revolvente</h5>
                            <div class="ml-5 pl-4">
                                <p class="m-0">Línea de crédito solicitada: <span class="font-weight-bold">$100,000.00</span></p>
                                <p class="m-0">Simulación de primer disposición</p>
                                <p class="m-0">Monto: <span class="font-weight-bold">$100,000.00</span></p>
                                <p class="m-0">Plazo: <span class="font-weight-bold">15 días</span></p>
                                <p class="m-0">Monto a pagar por disposición: <span class="font-weight-bold">$101,750.00</span></p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center opciones_calcular mt-5">
                                <a href="#" class="text-center"><i class="fas fa-chevron-left"></i> Regresar y calcular de nuevo</a>
                                <a href="#" class="text-white py-1 px-3 rounded font-weight-bold text-center">Solicitar crédito <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="borde_inferior_creditos rounded-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>

<?php include('includes/principal/foot.php'); ?>