<!doctype html>
<html lang="en">
  <head>
  	<title>Duncan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  	<header>
  		<?php include 'header.php'; ?>
  	</header>
  	
  	<!--INICIO LOREM-->
  	<div class="row loremipsum">
  		<div class="col-12 col-sm-12 col-sm-12">
  			<h5 class="lang" key="parrafo1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
  		</div>
  	</div>
	<!--FIN LOREM-->
	<!--INICIO ENCUENTRA TU BATERIA-->
	<div class="row">
		<div class="col-12 col-sm col-sm-12 no-responsive-mobile">
			<img src="images/foto-2.png" style="width: 100%;position: absolute;">
			<div class="offset-sm-7 col-sm-4 formulario-encuentra no-responsive">
				<form>
					<div class="form-group">
						<p style="font-weight: bold;" class="lang" key="encuentra-bateria">ENCUENTRA TU BATERÍA</p>
					</div>
					<div class="form-group">
						<label class="lang" key="buscala-por">BÚSCALA POR</label>
					</div>
				 	<div class="form-check form-check-inline col-sm-5">
				  		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
				  		<label class="form-check-label lang" for="inlineRadio1" key="tipo-vehiculo">TIPO DE VEHICULO</label>
				 	</div>
				 	<div class="form-check form-check-inline col-sm-5">
				  		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
				  		<label class="form-check-label lang" for="inlineRadio2" key="grupo-bateria">GRUPO DE BATERÍA</label>
				 	</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="marca">MARCA</option>
				        <option>...</option>
				      </select>
				  	</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="year">AÑO</option>
				        <option>...</option>
				      </select>
				  	</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="modelo">MODELO</option>
				        <option>...</option>
				      </select>
				  	</div>
				 	<div class="offset-sm-9">
				 		<button type="submit" class="btn btn-light lang" key="buscar">BUSCAR</button>
				 	</div>
				</form>
			</div>
			<div class="offset-sm-7 col-sm-4 formulario-encuentra responsive">
				<form>
					<div class="form-group">
						<p style="font-weight: bold;" class="lang" key="encuentra-bateria">ENCUENTRA TU BATERÍA</p>
					</div>
					<div class="form-group">
						<label class="lang" key="buscala-por">BÚSCALA POR</label>
					</div>
				 	<div class="form-check form-check-inline col-5 col-sm-5">
				  		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
				  		<label class="form-check-label lang" for="inlineRadio1" key="tipo-vehiculo">TIPO DE VEHICULO</label>
				 	</div>
				 	<div class="form-check form-check-inline col-5 col-sm-5">
				  		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
				  		<label class="form-check-label lang" for="inlineRadio2" key="grupo-bateria">GRUPO DE BATERÍA</label>
				 	</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="marca">MARCA</option>
				        <option>...</option>
				      </select>
				  	</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="year">AÑO</option>
				        <option>...</option>
				      </select>
				  	</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="modelo">MODELO</option>
				        <option>...</option>
				      </select>
				  	</div>
				 	<div class="offset-sm-9">
				 		<button type="submit" class="btn btn-light lang" key="buscar">BUSCAR</button>
				 	</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-sm col-sm-12 responsive-mobile">
			<div class="offset-sm-7 col-sm-4 formulario-encuentra">
				<form>
					<div class="form-group">
						<p style="font-weight: bold;" class="lang" key="encuentra-bateria">ENCUENTRA TU BATERÍA</p>
					</div>
					<div class="form-group">
						<label class="lang" key="buscala-por">BÚSCALA POR</label>
					</div>
				 	<div class="form-check form-check-inline col-5 col-sm-5">
				  		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
				  		<label class="form-check-label lang" for="inlineRadio1" key="tipo-vehiculo">TIPO DE VEHICULO</label>
				 	</div>
				 	<div class="form-check form-check-inline col-5 col-sm-5">
				  		<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
				  		<label class="form-check-label lang" for="inlineRadio2" key="grupo-bateria">GRUPO DE BATERÍA</label>
				 	</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="marca">MARCA</option>
				        <option>...</option>
				      </select>
				  	</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="year">AÑO</option>
				        <option>...</option>
				      </select>
				  	</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="modelo">MODELO</option>
				        <option>...</option>
				      </select>
				  	</div>
				 	<div class="offset-8 offset-sm-9">
				 		<button type="submit" class="btn btn-light lang" key="buscar">BUSCAR</button>
				 	</div>
				</form>
			</div>
		</div>
	</div>
	<!--FIN ENCUENTRA TU BATERIA-->
	<!--INICIO OFRECEMOS-->
	<div class="row ">

		<div class="col-12 col-sm-12 col-sm-12 ofrecemos">
			<p style="color: white; display: inline-block; " class="lang" key="parrafo2">OFRECEMOS</p> <p style="color: #edbd04; display: inline-block; " class="lang" key="gratis">SERVICIO GRATUITO</p> <p style="color: white; display: inline-block; " class="lang" key="parrafo20"> DE REVISIÓN DE LA BATERÍA Y DEL SISTEMA DE TU VEHICULO.</p>
		</div>
	</div>
	<!--FIN OFRECEMOS-->
	<!--INICIO DONDE COMPRAR-->
	<div class="row">
		<div class="col-12 col-sm-12 col-sm-12">
			<img src="images/foto-3.png" style="width: 100%;position: absolute;">
			<div class="offset-sm-7 col-sm-4 formulario-comprar">
				<form>
					<div class="form-group">
						<p style="font-weight: bold;" class="lang" key="donde-comprar">¿DONDE COMPRAR?</p>
					</div>
				  	<div class="form-group">
				      <select id="inputState" class="form-control">
				        <option selected class="lang" key="ciudad">CIUDAD</option>
				        <option>...</option>
				      </select>
				  	</div>
				  	<div class="offset-sm-9">
				 		<button type="submit" class="btn btn-light lang" key="buscar">BUSCAR</button>
				 	</div>
				</form>
			</div>
		</div>
	</div>
	<!--FIN DONDE COMPRAR-->
	<!--INICIO NUESTROS PRODUCTOS-->
	<div class="row productos no-responsive">
		<div class="col-12 col-sm-12">
			<div class="row">
				<div class="col-sm-12 titlenew">
					<h4 class="titulo lang" key="nuestros-productos">NUESTROS PRODUCTOS</h4>
				</div>
			</div>
			<div class="row  imgcompletas">
			
					<div class="col-4 col-sm-1 productos-img">
						<img id="img1" src="images/carro.png">
					</div>
					<div class="col-4 col-sm-1 productos-img">
						<img id="img2" src="images/bus.png">
					</div>
					<div class="col-4 col-sm-1 productos-img">
						<img id="img3" src="images/barco.png">
					</div>
					<div class="col-4 col-sm-1 productos-img">
						<img id="img4" src="images/industria.png">
					</div>
					<div class="col-4 col-sm-1 productos-img">
						<img id="img5" src="images/bateria.png">
					</div>
					<div class="col-4 col-sm-1 productos-img">
						<img id="img6" src="images/panel.png">
					</div>
			</div>	
		</div>
	</div>
	<div class="row productos productos-responsive">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="titulo lang" key="nuestros-productos">NUESTROS PRODUCTOS</h4>
				</div>
			</div>
			<div class="row">
			
					<div class="col-3 col-sm-3 productos-img">
						<img src="images/carro.png">
					</div>
					<div class="col-3 col-sm-3 productos-img">
						<img src="images/bus.png">
					</div>
					<div class="col-3 col-sm-3 productos-img">
						<img src="images/barco.png">
					</div>
					<div class="col-3 col-sm-3 productos-img">
						<img src="images/industria.png">
					</div>
					<div class="col-3 col-sm-3 productos-img">
						<img src="images/bateria.png">
					</div>
					<div class="col-3 col-sm-3 productos-img">
						<img src="images/panel.png">
					</div>
			</div>
		</div>
	</div>		
			<!--CAROUSEL  DE PRODUCTOS EN MOBILE-->
			<div class="row productos productos-responsive-mobile">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12">
							<h4 class="titulo lang titulo-productos" key="nuestros-productos">NUESTROS PRODUCTOS</h4>
						</div>
					</div>
				<div class="row" style="background-color: black; margin-left: -42px; margin-right: -42px">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner carousel-productos">
					    <div class="carousel-item active">
					      <img class="d-block w-100 products" src="images/carro.png">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 products" src="images/bus.png">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 products" src="images/barco.png">
					    </div>
					     <div class="carousel-item">
					      <img class="d-block w-100 products" src="images/industria.png">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 products" src="images/bateria.png">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 products" src="images/panel.png">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>	
			</div>		
		</div>
	<!--FIN NUESTROS PRODUCTOS-->
	<!--INICIO RECICLAJE-->
	<div class="row">
		<div class="col-12 col-sm col-sm-12">
			<img src="images/reciclable.png" class="reciclable">
		</div>
	</div>
	<!--FIN RECICLAJE-->
	<!--INICIO PREGUNTAS-->
	<div class="row preguntas">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12 habla">
					<h4 class="titulo lang" key="tienes-preguntas">¿TIENES PREGUNTAS? HABLA CON NOSOTROS</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 contacto1">
					<img src="images/telefono.png">
					<p class="lang" key="numero-contacto">NÚMEROS DE CONTACTO</p>
					<div>
						(0212) 257.80.22/ 256.36.11
					</div>
				</div>
				<div class="col-sm-6 contacto2">
					<img src="images/mail.PNG">
					<p class="lang" key="correo-electronico">CORREO ELECTRÓNICO</p>
					<div>
						<a class="botonmail" href="mailto:SUGERENCIAS@DUNCAN.COM.VE">SUGERENCIAS@DUNCAN.COM.VE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--FIN PREGUNTAS-->
  	<footer>
  		<?php include 'footer.php'; ?>
  	</footer>
<?php  ?>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/fontawesome-all.js" type="text/javascript"></script>
	<script src="js/traductor.js" type="text/javascript"></script>
 </body>
  
</html>