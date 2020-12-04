<header>
		<div class="header">
			
			<h1>Almacen Ganadero</h1>
			<div class="optionsBar">
				<p>Colombia, <?php echo fechaC();?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['usuario']?></span>
				<img class="photouser" src="image/user.png" alt="Usuario">
				<a href="cerrar.php"><img class="close" src="image/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
    <?php 
    include 'nav.php';
    ?>
	</header>