<?php 

	/*
	 *Pegar este codigo para obtener un full screen de tu navegador chrome 
	 *mientras interactuas con el usuario
	 *se activa al pulsar sobre la pantalla
	 */

 ?>
<script type="text/javascript">
	addEventListener("click", function() {
    var el = document.documentElement,
      rfs = el.requestFullscreen
        || el.webkitRequestFullScreen
        || el.mozRequestFullScreen
        || el.msRequestFullscreen 
    ;

    rfs.call(el);
});
</script>