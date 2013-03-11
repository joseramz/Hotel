<?php

include ('cabecera.php');
?>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false">
</script>

<!--funcion en javascript que genera el mapa de Google-->
<script type="text/javascript">
  function fMapa() {
    var latlng = new google.maps.LatLng(40.414827,-3.701349);
    var myOptions = {zoom: 20,center: latlng,mapTypeId: google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
  }

</script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<body onLoad="fMapa()">

<!--generamos las tablas para la presentacion y el mapa-->
<div id="contenedor">
<table width="1000" border="0" cellspacing="20" align="center">
      <tr>
<!--Insertamos el ActionScript-->
        <td width="300"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="350" height="200" id="FlashID" title="presentación">
          <param name="movie" value="ActionScript/presentacionIndex.swf">
          <param name="quality" value="high">
          <param name="wmode" value="opaque">
          <param name="swfversion" value="6.0.65.0">
          <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
          <param name="expressinstall" value="Scripts/expressInstall.swf">
          <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="ActionScript/presentacionIndex.swf" width="450" height="300">
            <!--<![endif]-->
            <param name="quality" value="high">
            <param name="wmode" value="opaque">
            <param name="swfversion" value="6.0.65.0">
            <param name="expressinstall" value="Scripts/expressInstall.swf">
            <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
            <div>
              <h4>El contenido de esta p&aacute;gina requiere una versi&oacute;n m&aacute;s reciente de Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object></td>
        
        <td width="812" align="justify">El hotel Confort está situado en pleno centro de la ciudad se compone de modernas instalaciones para que usted y los suyos disfruten con tranquilidad.</td>
      </tr>
      <tr>
          
</tr>
</table>


<table width="1000"  border="0" align="center" cellspacing="40">
  <tr>
<!--  //Insertamos el mapa de Google-->
    <td width="300" height="153"><div align="left" id="map_canvas" style="width:100%; height:150%"></div>
<div id="body" ></div></td>
    <td>El hotel está situado en pleno centro de la ciudad, acceso a todo tipo de transporte píblico,y todo tipo de opciones culturales.</td>
  </tr>
</table>
    
  <div class="empuje"></div>
</div>

    
  <?php
     include('pie.php');
	?>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>

