<?php $pagina = basename($_SERVER['PHP_SELF']); ?>
<div class="creditos">
    <h4 class="font-weight-bold">Calcula tu pago</h4>
    <div class="row">
        <div class="tipo_credito col-lg-5 p-0 rounded">
            <ul class="nav nav-tabs">
                <li class="nav-item w-50"><a class="<?php echo ($pagina != 'credito_revolvente.php') ? 'active' : '' ?> h-100 font-weight-bold nav-link text-center text-dark border-white border-top-0 border-left-0" href="#simple" data-toggle="tab">Crédito Simple</a></li>
                <li class="nav-item w-50"><a class="<?php echo ($pagina == 'credito_revolvente.php') ? 'active' : '' ?> h-100 font-weight-bold nav-link text-center text-dark border-white border-top-0 border-right-0" href="#revolvente" data-toggle="tab">Crédito Revolvente</a></li>
            </ul>

            <div class="tab-content bg-white">
                <div class="tab-pane fade <?php echo ($pagina != 'credito_revolvente.php') ? 'show active' : '' ?>" role="tabpanel" aria-labelledby="simple-tab" id="simple">
                    <div style="width: 80%;margin: 0 auto;">
                        <form action="">
                            <div class="col-md-12 form-group pt-3">
                                <label class="font-weight-bold" for="">Monto:</label>
                            </div>
                            <div class="col-md-12 form-group d-flex align-items-center">
                                <label class="font-weight-bold" for="plazos">Plazos:</label>
                                <select class="form-control ml-4" name="plazos" id="plazos">
                                    <option value="">3 meses</option>
                                    <option value="">6 meses</option>
                                </select class="form-control">
                            </div>
                            <div class="col-md-12 d-flex justify-content-between align-items-center">
                                <label class="font-weight-bold" for="garantia">¿Cuentas con garantía?</label>
                                <input type="checkbox" name="garantia" id="garantia">
                            </div>
                            <div class="info col-md-12 text-justify">
                                <small>Si cuentas con garantía puedes acceder a mejores tasas y mayores montos.</small><br>
                                <small>Consigue hasta 3 millones sin garatía o hasta 10 millones con garantía.</small>
                            </div>
                            <div class="col-md-12 pt-3 pb-3 pr-0 pl-0">
                                <!-- <button type="submit" class="text-white w-50 d-block m-auto btn boton_calcular font-weight-bold pt-1 pb-1">Calcular</button> -->
                                <a href="calcular_pago.php" class="text-white w-50 d-block m-auto btn boton_calcular font-weight-bold pt-1 pb-1">Calcular</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade <?php echo ($pagina == 'credito_revolvente.php') ? 'show active' : '' ?>" role="tabpanel" aria-labelledby="revolvente-tab" id="revolvente">
                    <div style="width: 80%;margin: 0 auto;">
                        <form action="">
                            <div class="col-md-12 form-group pt-3">
                                <label class="font-weight-bold" for="">Monto:</label>
                            </div>
                            <div class="col-md-12 form-group d-flex align-items-center">
                                <label class="font-weight-bold" for="plazos">Plazos:</label>
                                <select class="form-control ml-4" name="plazos" id="plazos">
                                    <option value="">3 meses</option>
                                    <option value="">6 meses</option>
                                </select class="form-control">
                            </div>
                            <div class="col-md-12 d-flex justify-content-between align-items-center">
                                <label class="font-weight-bold" for="garantia">¿Cuentas con garantía?</label>
                                <input type="checkbox" name="garantia" id="garantia">
                            </div>
                            <div class="info col-md-12 text-justify">
                                <small>Si cuentas con garantía puedes acceder a mejores tasas y mayores montos.</small><br>
                                <small>Consigue hasta 3 millones sin garatía o hasta 10 millones con garantía.</small>
                            </div>
                            <div class="col-md-12 pt-3 pb-3 pr-0 pl-0">
                                <button type="submit" class="text-white w-50 d-block m-auto btn boton_calcular font-weight-bold pt-1 pb-1">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="borde_inferior_creditos rounded-bottom"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 p-0">
            <small>Para conocer más sobre el cálculo de tu mensualidad visita nuestro simulador</small>
        </div>
    </div>
</div>