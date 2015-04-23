<!DOCTYPE html>
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel='stylesheet' id='camera-css'  href='js/vendor/camera/css/camera.css' type='text/css' media='all'> 
	<link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <style>
		body {
			margin: 0;
			padding: 0;
		}
		a {
			color: #09f;
		}
		a:hover {
			text-decoration: none;
		}
		#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 1000px;
			width: 90%;
		}
	</style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    
    <script type='text/javascript' src='js/vendor/camera/jquery.min.js'></script>
    <script type='text/javascript' src='js/vendor/camera/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/vendor/camera/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js/vendor/camera/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: false
				,height: '900px'
			});

		});
	</script>
 
</head>
<body>
	<nav class="top-bar" data-topbar="" style="background-color: #1a3a8d;">
		<ul class="title-area">
		  <!-- Title Area -->
		  <li class="name">
			<h1>
			  <a href="index.php">
				Towerbank
			  </a>
			</h1>
		  </li>
		</ul>
		<section class="top-bar-section">
		  <!-- Right Nav Section -->
		  <ul class="right">
			<li class="divider"></li>
			<li><a href="main.php">Mecanica</a></li>
			<li class="divider"></li>
			<li><a href="terms.php">Términos y Condiciones</a></li>
		  </ul>
		</section>
	</nav>

	<div style="width: 78%; margin: 0 auto;">

		<div>
			<img src="img/towerbank-logo-glow.png" />
		</div>
	</div>
	<div class="fluid_container">
    	<h2>Pon el mundo en tus manos</h2>
		<h3>Gánate un viaje para 2 personas</h3>
		<p>Por cada producto de <strong>Banca Personal</strong> que adquieras hasta el 24 de junio de 2015, recibes 5 boletos electrónicos para el sorteo de un fabuloso viaje más USD$ 1,000 para gastos</p>
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-src="img/001.jpg" data-portrait="true">
            </div>
            <div data-src="img/002.jpg" data-portrait="true">
            </div>
            <div data-src="img/003.jpg" data-portrait="true">
            </div>
            <div data-src="img/004.jpg" data-portrait="true">
            </div>
            <div data-src="img/005.jpg" data-portrait="true">
            </div>
            <div data-src="img/006.jpg" data-portrait="true">
            </div>
            <div data-src="img/007.jpg" data-portrait="true">
            </div>
            <div data-src="img/008.jpg" data-portrait="true">
            </div>

        </div><!-- #camera_wrap_1 -->


    </div><!-- .fluid_container -->
    
    <div style="clear:both; display:block; height:10px"></div>
	<script src="js/foundation.min.js"></script>
<?php include "inc/footer.fb.php"; ?>
	<div class="xrow">
		<div class="large-12" style="background-color: #1a3a8d;">
			&nbsp;
			<br />
			<br />
			<br />
			<br />
			<br />
		</div>
	</div>
</body> 
</html>