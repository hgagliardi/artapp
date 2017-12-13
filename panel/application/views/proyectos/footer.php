<!-- BEGIN CORE PLUGINS -->
<script src="<?= base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<script src="<?= base_url(); ?>assets/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>



<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?= base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?= base_url(); ?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
<script type="text/javascript">

  var url = '<?= base_url(); ?>';
  var escondido = '<?= $proyecto->proyectos_principal ?>';

  $(".btn-borrar").on('click', function(e){
    e.preventDefault();
    var fotoId = this.id.split('-')[1];

    $.post( url + "Proyectos/borrar_item", { fotoId: fotoId })
      .done(function( data ) {
      });

      $(this).parent().parent().parent().hide();

  });

  $(".set_principal").on('click', function(e){
    e.preventDefault();

    var proyectoId = '<?= $proyecto->proyectos_id; ?>';
    var fotoId = this.id;

    $.post( url + "Proyectos/set_principal", { proyectoId: proyectoId, fotoId: fotoId })
      .done(function( data ) {
      });

    $(this).hide();
    $("#" + escondido).show();
    escondido = fotoId;

  });



  var inputs = document.querySelectorAll( '.inputfile' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split(' \ ').pop();

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
		else
			label.innerHTML = labelVal;
	});
});

</script>



</body>

</html>
