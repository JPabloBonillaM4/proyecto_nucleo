<?php include('includes/principal/head.php'); ?>

    <div class="calcular_pago_2 principal">
        <!-- NAVBAR -->
        <?php include('includes/navbar.php'); ?>

        <div class="creditos mt-5">
            <div class="row">
                <div class="col-lg-5 p-0 mb-5">
                    <h4 class="font-weight-bold pb-1">Calcula tu pago</h4>
                    <div class="calcular_info bg-white rounded fuente_base">
                        <div class="pb-4">
                            <h5 class="font-weight-bold pl-5 m-0 py-4">Crédito Revolvente</h5>
                            <div class="ml-5 pl-4">
                                <p class="m-0">$100,000</p>
                                <p class="m-0">A 15 días</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center opciones_calcular mt-5">
                                <a href="#" onclick="window.history.back();" class="text-center"><i class="fas fa-chevron-left"></i> Regresar y calcular de nuevo</a>
                                <a href="rechazado.php" class="text-white py-1 px-3 rounded font-weight-bold text-center">Solicitar crédito <i class="fas fa-chevron-right"></i></a>
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