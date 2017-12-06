                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Inicio</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Proyectos</span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Proyectos
                            <small>Acá vas a encontrar todos los proyectos que subiste hasta el momento.</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN : USER CARDS -->
                        <div class="row">
                            <div class="col-md-12">
                              <!-- PROYECTOS ACTIVOS -->
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Proyectos Activos</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-card mt-element-overlay">
                                            <div class="row">
                                              <?= (count($proyectos)==0) ? '<div class="col-xs-12"><h3>No hay proyectos activos</h3><span><a href="' . base_url() . 'Proyectos/agregar' . '">Agregar uno</a></span></div>' : '';  ?>
                                              <?php foreach($proyectos as $p) { ?>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="<?= $p->fotoPrincipal; ?>" />
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name"><?= $p->proyectos_nombre; ?></h3>
                                                            <p class="mt-card-desc font-grey-mint"><?= $p->proyectos_descripcion; ?></p>
                                                            <a style="margin-bottom: 20px;" href="<?= base_url() . 'Proyectos/editar/' . $p->proyectos_id; ?>" class="btn btn-sm blue"> Editar
                                                              <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a style="margin-bottom: 20px;" href="<?= base_url() . 'Proyectos/borrar/' . $p->proyectos_id; ?>" class="btn btn-sm red"> Borrar
                                                              <i class="fa fa-times"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div><!-- FIN PROYECTO-ITEM -->
                                              <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- PROYECTOS IN IN IN INACTIVOS -->
                                  <div class="portlet light portlet-fit bordered">
                                      <div class="portlet-title">
                                          <div class="caption">
                                              <i class=" icon-layers font-green"></i>
                                              <span class="caption-subject font-green bold uppercase">Proyectos Inactivos</span>
                                          </div>
                                      </div>
                                      <div class="portlet-body">
                                          <div class="mt-element-card mt-element-overlay">
                                              <div class="row">
                                                <?= (count($proyectos_inactivos)==0) ? '<div class="col-xs-12"><h3>No hay proyectos inactivos</h3><span></div>' : '';  ?>
                                                <?php foreach($proyectos_inactivos as $p) { ?>
                                                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                      <div class="mt-card-item">
                                                          <div class="mt-card-avatar mt-overlay-1">
                                                              <img src="<?= $p->fotoPrincipal; ?>" />
                                                          </div>
                                                          <div class="mt-card-content">
                                                              <h3 class="mt-card-name"><?= $p->proyectos_nombre; ?></h3>
                                                              <p class="mt-card-desc font-grey-mint"><?= $p->proyectos_descripcion; ?></p>
                                                              <a style="margin-bottom: 20px;" href="<?= base_url() . 'Proyectos/activar/' . $p->proyectos_id; ?>" class="btn btn-sm green"> Activar
                                                                <i class="fa fa-power-off"></i>
                                                              </a>
                                                              <a style="margin-bottom: 20px;" href="<?= base_url() . 'Proyectos/editar/' . $p->proyectos_id; ?>" class="btn btn-sm blue"> Editar
                                                                <i class="fa fa-edit"></i>
                                                              </a>

                                                          </div>
                                                      </div>
                                                  </div><!-- FIN PROYECTO-ITEM -->
                                                <?php } ?>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                            </div>
                        </div>

                        <!-- END : USER CARDS -->
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->

            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>

        <script type="text/javascript">

          function ds(){

          }

        </script>
