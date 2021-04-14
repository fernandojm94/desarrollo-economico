<!DOCTYPE html>
<html style="background: black;">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secretaría de Desarollo Económico</title>
    
    <link rel="icon" href="assets/img/logo/jm.ico">

	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/fontawesome/css/all.css">

	<link rel="stylesheet" type="text/css" href="./assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main-header.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main-content.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main-footer.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/submenus.css">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="./assets/css/dataTables.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129023585-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-129023585-1');
	</script>
	
</head>
<body style="font-family: 'Raleway', sans-serif;">

	<div class="cabezal">
		<!--<img src="./assets/img/cerro.jpg" class="back1">-->
		<div class="imagen">
			<div>
				<img src="./assets/img/fondo.png">
				<a href="index.php"><img src="./assets/img/logo_2020.png" class="escudito"></a>
			</div>
		</div>

		<div class="mapa">
			<nav class="navbar navbar-expand-cu navbar-cu">
			  
			  <button class="navbar-toggler bjm-menu" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span><i class="fas fa-bars"></i></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav navbar-nav-cu">
			      <li class="nav-item active">
			        <a class="nav-link bjm" href="index.php">Inicio<span class="sr-only">(current)</span></a>
			      </li>

			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle bjm" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Gobierno
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="estaticos/2020/plan/Plan_de_Desarrollo_municipal_JM_2019-2021.pdf" target="_blank">Plan de Desarrollo Municipal 2019-2021</a>
			          <a class="dropdown-item" href="estaticos/2020/D.O.DISTRIBUCIONDEFONDOSFISMDFYFOTAMUNDF3970.pdf" target="_blank">D.O. DISTRIBUCIÓN DE FONDOS FISMDF Y FOTAMUNDF 3970</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/gobierno/cabildo.php');">Cabildo</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/gobierno/gabinete.php');">Gabinete</a>
			          <a class="dropdown-item" href="estaticos/2020/mir/MIR2020.PDF" target="_blank">Matriz de Indicadores de Resultados</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/gobierno/directorio.php');">Directorio</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/sala_prensa/sala_prensa.php');">Sala de Prensa</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/informes/index.php');">Primer Informe</a>
			          <a class="dropdown-toggle dropdown-item" href="#" id="licitacionesLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Licitaciones
			          </a>
			          <div class="dropdown-menu" aria-labelledby="licitacionesLink">
			            <a class="dropdown-item" href="javascript:pagecontent('view/licitaciones/licitaciones.php');">Obras Públicas</a>
			          </div>
			        </div>
			      </li>

			    </ul>
			  </div>
			</nav>
		</div>

		

		<div class="redes">
			<a href="https://es-la.facebook.com/JesusMariaMunicipio/" class="rsa" target="_blank"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/jesusmaria_municipio/" class="rsa" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="https://twitter.com/Jesus_Maria_" class="rsa" target="_blank"><i class="fab fa-twitter"></i></a>
			<a href="https://www.youtube.com/channel/UCsrgM_afF4yD2xLY8y3fC_g" class="rsa" target="_blank"><i class="fab fa-youtube"></i></a>
		</div>
	</div>

	<div id="main_content">
		<div class="dependencias">

			<div class="d-title">
				<span>Dependencias</span>	
			</div>

		</div>

		<div>
			<table id="tabla_vacantes">
				<thead></thead>
				<tbody></tbody>
			</table>
		</div>

		<div id="load_modal_dependencias"></div>
		<div id="load_modal_info"></div>				
	
	</div>

	<!-- <div class="pre-footer">
		
		<div class="emblem">
			<a href="index.php">
				<img src="./assets/img/jml_miniC.png">
			</a>
		</div>

		<div class="mapa">
			<div>
				<div>
					<a href="index.php">Inicio</a>
				</div>
			</div>

			<div>
				<div>
					<span>¡Mi orgullo, mi gente!</span>
					<ul>
						<a href="javascript:pagecontent('view/miorgullomigente/historia.php');">
							<li>Historia</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/escudo.php');">
							<li>Escudo</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/datos_relevantes.php');">
							<li>Datos Relevantes</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/vision.php');">
							<li>Visión</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/mision.php');">
							<li>Misión</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/valores_principios.php');">
							<li>Valores y Principios</li>
							
						</a>
					</ul>
				</div>
			</div>

			<div>
				<div>
					<span>Gobierno</span>
					<ul>
						<a href="estaticos/2020/plan/Plan_de_Desarrollo_municipal_JM_2019-2021.pdf" target="_blank">
							<li>PDM 2019-2021</li>
							
						</a>
						
						<a href="javascript:pagecontent('view/gobierno/cabildo.php');">
							<li>Cabildo</li>
							
						</a>

						<a href="javascript:pagecontent('view/gobierno/gabinete.php');">
							<li>Gabinete</li>
							
						</a>

						<a href="javascript:pagecontent('view/gobierno/directorio.php');">
							<li>Directorio</li>
							
						</a>
						
						<a href="javascript:pagecontent('view/buzon/buzon.php');">
							<li>Buzón de sugerencias</li>
							
						</a>
					</ul>
				</div>
			</div>
				
			<div>
				<div>
					<span>Trámites en línea</span>
					<ul>
					    <div onclick="info_predial();" >
    						<a>
    							<li>Predial</li>
    							
    						</a>
    					</div>

						<a href="javascript:pagecontent('view/tramites_linea/dependencias.php');">
							<li>Dependencias</li>
							
						</a>

						<a href="javascript:pagecontent('view/tramites_linea/cartografia.php');">
							<li>Cartografía</li>
							
						</a>
					</ul>
					
				</div>
			</div>

			<div>
				<div>
					<a href="http://turismo.jesusmaria.gob.mx/" target="_blank">Turismo</a>
				</div>
			</div>

			<div>
				<div>
					<a href="http://transparencia.jesusmaria.gob.mx/#/" target="_blank">Transparencia</a>
				</div>
			</div>

			<div>
				<div>
					<span>Consulta Evaluación</span>
					<ul>
						<a href="http://aguascalientes.gob.mx/cplap/Docs/IMCO/2019/Externas/FISM/JESUS_MARIA/03_ASM_2018_Jesus_Maria_FISM.pdf">
							<li>Acciones susceptibles de mejora</li>
						</a>
					</ul>
					
				</div>
			</div>	
		</div>

		<div class="social">
			<a href="https://es-la.facebook.com/JesusMariaMunicipio/" role="button" target="_blank"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/jesusmaria_municipio/" role="button" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="https://twitter.com/Jesus_Maria_" role="button" target="_blank"><i class="fab fa-twitter"></i></a>
			<a href="https://www.youtube.com/channel/UCsrgM_afF4yD2xLY8y3fC_g" role="button" target="_blank"><i class="fab fa-youtube"></i></a>
		</div>
	</div> -->

	<div class="footer" style="padding-top: 10px; padding-bottom: 10px;">
		<div>
			<p>Municipio de Jesús María 2019 - 2021</p>
			<p>Coordinación de Innovación Tecnológica &middot; Copyleft &#127279; 2017 &middot; Derechos Reservados</p>
			<p>Calle Emiliano Zapata No. 109 - Colonia Centro, Jesús María, Aguascalientes - C.P. 20920</p>
		</div>
	</div>

	<!--COMIENZAN LOS SCRIPTS-->
	<script type="text/javascript" src="./assets/jquery/jquery-3.4.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.js"></script>
	
	<script type="text/javascript" src="./assets/fontawesome/js/all.js"></script>

	<script type="text/javascript">

		$(document).ready( function () {
		    $('#tabla_vacantes').DataTable();
		} );
	
		function pagecontent(page){
			$("#main_content").load(page);
		}	 

	    function modales_abrir_cerrar(){

	    	$('#modal_info').on('shown.bs.modal', function (e) {
				$('#modal_dependencia').modal('toggle');
			});

			$('#modal_info').on('hidden.bs.modal', function (e) {
				$('#modal_dependencia').modal('toggle');
			});
		}

	</script>

	<script type="text/javascript" charset="utf8" src="./assets/js/dataTables.js"></script>
	<script type="text/javascript" src="./assets/js/droptoggle.js"></script>
	<script type="text/javascript" src="./assets/js/sweetalert.min.js"></script>


</body>
</html>
