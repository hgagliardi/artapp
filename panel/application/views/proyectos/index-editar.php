<link href="<?= base_url(); ?>assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/global/plugins/dropzone/basic.min.css" rel="stylesheet" type="text/css" />


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
                                    <span><?= $proyecto->proyectos_nombre; ?></span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">Editar <?= $proyecto->proyectos_nombre; ?>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN : USER CARDS -->
                        <div class="row">
                            <div class="col-md-12">
                              <div class="portlet-body">

                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet light bordered">
                                          <form class="" action="" method="post" enctype="multipart/form-data">

                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <i class="icon-settings font-red-sunglo"></i>
                                                    <span class="caption-subject bold uppercase"> Editá </span>

                                                </div>
                                                <div class="form-actions noborder" style="float:right;">
                                                    <button type="submit" name="guardar" id="guardar" class="btn blue">Guardar</button>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                    <div class="form-body">

                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="proyecto_titulo" id="proyecto_titulo" value="<?= $proyecto->proyectos_nombre; ?>" placeholder="Ingresá el título">
                                                            <label for="proyecto_titulo">Título</label>
                                                            <span class="help-block">Ingresá el título.</span>
                                                        </div>

                                                        <div class="form-group form-md-line-input md-checkbox-list" style="padding-top:0!important;">
                                                          <h4 style="margin-top: 0; margin-bottom: 15px;">Categorías</h4>
                                                          <?php foreach($proyecto->categorias as $c){ ?>
                                                            <div class="md-checkbox">
                                                              <input type="checkbox" <?= (in_array($c->categorias_id, $proyecto->categorias_proyecto)) ? 'checked' : ''; ?> name="proyecto_categorias[]" value="checkbox-<?= $c->categorias_id; ?>" id="checkbox-<?= $c->categorias_id; ?>" class="md-check">
                                                                <label for="checkbox-<?= $c->categorias_id; ?>">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $c->categorias_nombre; ?> </label>
                                                             </div>
                                                           <?php } ?>
                                                          </div>


                                                        <div class="form-group form-md-line-input">
                                                            <textarea id="proyecto_descripcion" name="proyecto_descripcion" class="form-control" rows="3" placeholder="Ingresá la descripción del proyecto (opcional)"><?= $proyecto->proyectos_descripcion; ?></textarea>
                                                            <label for="proyecto_descripcion">Descripción</label>
                                                        </div>


                                                        <div class="mt-element-card mt-element-overlay">
                                                            <div class="row">
                                                              <?php foreach($proyecto->items as $i) { ?>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="mt-card-item">
                                                                        <div class="mt-card-avatar mt-overlay-1"
                                                                              style="height: 300px;
                                                                                     background-image: url(<?= URL_SITIO_FOTOS . $proyecto->proyectos_id . '/' . $i->items_filename; ?>);
                                                                                     background-size: cover;
                                                                                     background-position: center;">
                                                                        </div>
                                                                        <div class="mt-card-content">
                                                                            <h3 class="mt-card-name">
                                                                              <?= $i->items_titulo; ?>
                                                                              <?php // echo ($i->items_id == $proyecto->proyectos_principal) ? '<i aria-hidden="true" class="fa fa-star"></i>' : ''; ?>
                                                                            </h3>
                                                                            <p class="mt-card-desc font-grey-mint"><?= $i->items_descripcion; ?></p>
                                                                            <?php if($i->items_id != $proyecto->proyectos_principal){ ?>
                                                                              <a style="margin-bottom: 20px;" href="javascript:;" class="btn btn-sm blue"> Elegir como principal
                                                                                <i class="fa fa-star"></i>
                                                                              </a>
                                                                            <?php } ?>
                                                                            <a style="margin-bottom: 20px;" href="" class="btn btn-sm red"> Borrar
                                                                              <i class="fa fa-times"></i>
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                </div><!-- FIN PROYECTO-ITEM -->
                                                              <?php } ?>
                                                            </div>
                                                          </div>

                                                          <div class="m-heading-1 border-green m-bordered">
                                                              <h3><i class="fa fa-camera" style="margin-right:10px;" aria-hidden="true"></i>Subir más fotos</h3>
                                                              <p> Acá podes subir más fotos para el <b><?= $proyecto->proyectos_nombre; ?></b> </p>

                                                          </div>
                                                          <div>
                                                              <label for='upload'>Add Attachments:</label>
                                                              <input id='upload' name="upload[]" type="file" multiple="multiple" />
                                                          </div>

                                                    </div>




                                            </div>

                                          </form>

                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->

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
