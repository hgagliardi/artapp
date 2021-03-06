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
                                    <span>Agregar proyecto</span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">Agregar
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
                                                    <span class="caption-subject bold uppercase"> Agregá </span>

                                                </div>
                                                <div class="form-actions noborder" style="float:right;">
                                                    <button type="submit" name="guardar" id="guardar" class="btn blue">Guardar</button>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                    <div class="form-body">

                                                        <div class="form-group form-md-line-input">
                                                            <input type="text" class="form-control" name="proyecto_titulo" id="proyecto_titulo" placeholder="Ingresá el título">
                                                            <label for="proyecto_titulo">Título</label>
                                                            <span class="help-block">Ingresá el título.</span>
                                                        </div>

                                                        <div class="form-group form-md-line-input md-checkbox-list" style="padding-top:0!important;">
                                                          <h4 style="margin-top: 0; margin-bottom: 15px;">Categorías</h4>
                                                          <?php foreach($proyecto->categorias as $c){ ?>
                                                            <div class="md-checkbox">
                                                              <input type="checkbox" name="proyecto_categorias[]" value="checkbox-<?= $c->categorias_id; ?>" id="checkbox-<?= $c->categorias_id; ?>" class="md-check">
                                                                <label for="checkbox-<?= $c->categorias_id; ?>">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $c->categorias_nombre; ?> </label>
                                                             </div>
                                                           <?php } ?>
                                                          </div>


                                                        <div class="form-group form-md-line-input">
                                                            <textarea id="proyecto_descripcion" name="proyecto_descripcion" class="form-control" rows="3" placeholder="Ingresá la descripción del proyecto (opcional)"></textarea>
                                                            <label for="proyecto_descripcion">Descripción</label>
                                                        </div>

                                                        <div class="m-heading-1 border-green m-bordered">
                                                            <h3><i class="fa fa-camera" style="margin-right:10px;" aria-hidden="true"></i>Subir más fotos</h3>
                                                            <p> Acá podes subir las fotos del proyecto</p>

                                                        </div>
                                                        <div style="margin-bottom: 20px;">
                                                            <input type="file" name="upload[]" id="upload" class="inputfile inputfile-1" data-multiple-caption="{count} archivos seleccionados" multiple />
                                                            <label for="upload">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                                            <span class="iborrainputfile">Seleccionar archivos</span>
                                                            </label>
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
