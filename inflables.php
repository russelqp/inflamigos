 <?php
 $titlePage="Inflables - Inflamigos";
 $descPage="En inflamigos contamos con 6 modelos de brincolines para todos los gustos y edades, desde una alberca de pelotas hasta un gran interactivo.";
 ?>
 <?php include('header.php');?>

  <div id="mainContent">
  <div class="top_main"><?php include('inflable_top.php'); ?>
    <p><a href="index.php">Inicio</a>&gt;Inflables</p></div>
  <div class="middle_main">
   <?php include('sidebar.php');?>
   <div id="articulo">
 <div class="top_art"></div> 
    <h3>Inflables</h3>
      <p><i><strong>Estos son nuestros inflables:</strong></i></p>
      <div class="menu_inflables">
    <h4>Peque&ntilde;os:</h4>
        <ol>
    <li><?php echo '<a href="inflable.php?inflable=castillo-aventura" title="ver imagenes de: Castillo Aventura">'; ?><h5>Castillo Aventura <br />(6 x 3)</h5><img src="inflables/caventura_middle.jpg" width="200" height="141" alt="castillo_aventura_middle" /></a></li>
    <li><?php echo '<a href="inflable.php?inflable=castillo-princess" title="ver imagenes de: Castillo Princess">'; ?><h5>Castillo Princess<br />(4 x 3)</h5><img src="inflables/cprincess_middle.jpg" width="200" height="141" alt="castillo_princess_middle" /></a></li>
    <li><?php echo '<a href="inflable.php?inflable=escaladora" title="ver imagenes de:Escaladora">'; ?><h5>Escaladora<br />(6 x 3)</h5><img src="inflables/escaladora_middle.jpg" width="200" height="141" alt="escaladora_middle" /></a></li>
        <li><?php echo '<a href="inflable.php?inflable=la-cajita" title="ver imagenes de: La Cajita">'; ?><h5>La Cajita<br />(4 x 3)</h5><img src="inflables/lacajita_middle.jpg" width="200" height="141" alt="la-cajita_middle" /></a></li>
  	</ol>

    <br />
    <h4>Grandes</h4>
    <ol>
   	<li><?php echo '<a href="inflable.php?inflable=ultra-cubo" title="ver imagenes de: Ultra Cubo">'; ?><h5>Ultra Cubo<br />(7 x 5)</h5><img src="inflables/ucubo_middle.jpg" width="200" height="141" alt="ultra_cubo_middle" /></a></li>
    <li><?php echo '<a href="inflable.php?inflable=arco-slide" title="ver imagenes de: Arco Slide">'; ?><h5>Arco Slide<br />(7 x 5)</h5><img src="inflables/aslide_middle.jpg" width="200" height="141" alt="arco_slide_middle" /></a></li>
	    </ol>

    <br />
    <h4>Tambi&eacute;n puedes descargar nuestro cat&aacute;logo:</h4>
   <br />
        <a href="downloads/catalogo_inflamigos.doc" title="Descarga el catálogo versión .doc"><img src="imagenes/doc.png" width="45" height="47" alt="ico-word-download" /></a></div>
    <p>&nbsp;</p>
    <h4>Reglas b&aacute;sicas para el uso de los brincolines inflables:</h4>
    <div class="lista">
    <img src="imagenes/punching-bag.png" title="alegria" width="80" height="141"/>
    <ol>
      <li>No subir con juguetes u objetos punzo cortantes.</li>
      <li>No subir con alimentos, dulces y/o bebidas.</li>
      <li>No subir con zapatos, tenis u otro calzado de material r&iacute;gido o que pueda   da&ntilde;ar el equipo.</li>
      <li>No arrastrar el brincolin para transladarlo a otro lugar.</li>
    </ol>
   

    </div>

	<!-- end #mainContent --></div>
	<!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos -->
<?php include('footer.php');?>