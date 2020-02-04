<?php include('includes/principal/head.php'); ?>

    <div class="aprobado principal">
        <!-- NAVBAR -->
        <?php include('includes/navbar.php'); ?>

        <div class="creditos pt-3">
            <div class="row mt-5">
                <div class="col-lg-5 p-0 mb-5">
                    <div class="credito_aprobado bg-white p-4 rounded">
                        <div class="ml-3">
                            <h2 class="text-uppercase font-weight-bold">¡Tú credito ha sido aprobado!</h2>

                            <form action="">
                                <a href="documentos.php" class="m-0">
                                    <div class="rounded-pill subir_documentos col-lg-6 py-1 my-4">
                                        <p class="m-0 text-center text-white font-weight-bold">
                                            <span>Subir documentos</span>
                                        </p>
                                    </div>
                                </a>
                            </form>
                        </div>

                        <div class="col-lg-3 p-0">
                            <a href="#" class="font-weight-bold"><i class="fas fa-chevron-left"></i> Regresar</a>
                        </div>
                    </div>
                    <div class="borde_inferior_creditos rounded-bottom"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>

<?php include('includes/principal/foot.php'); ?>