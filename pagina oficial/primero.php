<?php 	
require_once("./clases/class.php");
$tra=new Trabajo();
$tra1=$tra->traer_todos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAMPIONS</title>
    <link rel="shortcut icon" href="./imgs/logo.png">
    <link rel="stylesheet" href="./estilos/style.css">
</head>
<body>
    <!-- BARRA DE NAVEGACIÓN-->
    <nav>
		<div id="navegador">
        <a href="https://www.academiadefutbolmillonarios.com.co/"><img src="./imgs/logotipo-removebg-preview.png" alt="img3" class="img3"></a>
		</div>
		<ul>
			<li>
                <a href="https://www.academiadefutbolmillonarios.com.co/">Academia</a>
                <a href="https://millonarios.com.co/estadisticas/">Estadisticas</a>
                <a href="https://millonarios.com.co/mfc-media/">MFC Media</a>
                <a href="https://millonarios.com.co/noticias-mfc/">Noticias</a>
                <a href="https://millonarios.com.co/cuerpo-tecnico/">Cuerpo Tecnico</a>
			</li>
		</ul>
	</nav>
  
    <!--SLIDER-->
    <div class="container-slider">
    <div class="slider" id="slider">
      <div class="slider__section"><img src="./imgs/uefa-champions-league-estadio-2932.webp" alt="" class="slider__img"></div>
      <div class="slider__section"><img src="./imgs/champions-logo.jpg" alt="" class="slider__img"></div>
      <div class="slider__section"><img src="./imgs/R.jpg" alt="" class="slider__img"></div>
      <div class="slider__section"><img src="./imgs/1348797.webp" alt="" class="slider__img"></div>
	  <div class="slider__section"><img src="./imgs/juego.jpg" alt="" class="slider__img"></div>
      <div class="slider__section"><img src="./imgs/hola.jpg" alt="" class="slider__img"></div>
      <div class="slider__section"><img src="./imgs/champions.jpg" alt="" class="slider__img"></div>
      <div class="slider__section"><img src="./imgs/copa.jpg" alt="" class="slider__img"></div>
    </div>
    <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
    <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
  </div>
<script src="./js/script.js"></script>

    <!--PARTE PRINCIPAL PAGINA-->
	
    <div id="cuerpo_not_prin">
	<section class="">
		<div class="titulo_princ">
			<h1>"La Champions fue cruel con nosotros, hay que pasar página"</h1>
		</div>
		<div class="cont_titu">
			<p>Gavi olvida la Champions League y se centra en el resto de competiciones. El futbolista del Barcelona pasó por 'Mundo Deportivo' y prefirió dejar a un lado el batacazo europeo. Lo importante es que los azulgranas marchan líderes en la Liga. <a href="#">Leer Mas</a></p>

		</div>
	</section>
</div>
<div id="cuerpo">
	<div id="izq">
		<div class="not_gral">
			<?php 
			for ($i=0;$i<5;$i++)
			{
				
			?>
			<div class="tit_not">
				<p><h2>noticias Generales</h2></p> 
			</div>
			
			<div class="imag">
				<img src="./imgs/portada3-uefa-imagenes-brandemia-web-1000x670.jpg" alt="">
			</div>
			<div class="noti_cuer">
				<p>La UEFA Champions League es el torneo de clubes más entretenido del mundo ya que los mejores equipos del mundo compiten por levantar "la Orejona". La temporada 2022/23 no fue la excepción y los mejores mostraron toda su jerarquía para avanzar de fase pero también, como en todos las ediciones, hay equipos que sorprenden y logran competir con los candidatos al titulo.<a href="#"> Leer Mas</a></p>
			</div>
			<div class="deba_not">
				<div class="fecha">
					Fecha Noticia : 2022/10/29
				</div>
				<div class="comen">
					<a href="#">Comentarios : 1</a></p>
				</div>
			</div>	
			<div class="separ"></div>
			<?php 
				}
			?>
			<div class="paginacion">
				<hr>
				Anteriores Publicaciones
				&nbsp;&nbsp;||&nbsp;&nbsp;
				Siguientes Publicaciones
			</div>
		</div>
			
	</div>
	<div id="der">
		<div class="catego">
			<h2>Categorias</h2>
			<?php
			for($i=0;$i<count($tra1);$i++)
			{
				
				$desc=$tra1[$i]["desc_categoria"];
				$id_cat=$tra1[$i]["id_categoria"];

			?>
				
				<div class="lenguaje">
					<a href="?cat=<?php echo $id_cat;?>"title="<?php echo $desc;?>" ><?php echo $desc;?></a></div>
			<?php
			}
			?>
		</div>
		
	</div>	

</div>

<footer>
	<div class="cue_foot">
		<p>&copy Proyecto Desarrollado por el Grupo de ADSI SENA Soacha <?php echo date("Y");?></p>
	</div>
</footer>

</body>
</html>