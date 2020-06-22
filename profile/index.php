<!doctype html>
<?php
include '../php/es.php';
include '../php/proteccion.php';
?>
<html lang="es">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content='¿Eres booklover? Entonces este es tu sitio'>
</head>
<link rel="icon" type="image/png" href="../img/icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- CSS -->
<link rel="stylesheet" href="../css/profile.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/footer.css">

<title><?php echo $_SESSION["nom"] ?> - bookslover</title>
</head>

<body>
    <div id="bg">
        <img src="../img/background.png" alt="">
    </div>
    <div id="pre-sticky">
		<div id="sticky">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<button id="carrito" class="btn-navbar btn-sm btn-outline-secondary mr-5" onclick="">
						<img src="../img/compraNav.png" class="align-text-top" width="20">
						<span id="num-items">0</span>
					</button>
				</li>
				<?php if (isset($_SESSION["id"])) {
					echo '<li class="nav-item">
							<button id="perfil" class="btn-navbar btn-sm btn-outline-secondary" onclick="window.location.href=' . "'../profile/'" . '">
								<img src="../img/userProfile.png" class="align-text-top" width="20">
								<span id="nom-user">' . $_SESSION["nom"] . '</span>
							</button>
						</li>';
				} else {
					echo '<li class="nav-item">
						<button class="btn-navbar btn-sm btn-outline-secondary" type="button" onclick="window.location.href=' . "'../login/'" . '"><img src="img/userProfile.png" class="align-text-top" width="20"></button>
					</li>';
				}
				?>
			</ul>
		</div>
	</div>
    <div id="container">
        <nav class="navbar">
            <a class="navbar-brand" href="../"><img id="navbar-logo" src="../img/bookslover_white.png"></a>
            <ul class="nav justify-content-center">
                <div id="wrap">
                    <form target="" action="../search" autocomplete="off" method="get">
                        <input id="search" name="q" type="text" placeholder="¿Qué buscas?"><input id="search_submit" value="Buscar" type="submit">
                    </form>
                </div>
            </ul>
            <ul id="nav-desk" class="nav justify-content-end">
                <?php if (isset($_SESSION["id"])) {
                    echo '<li class="nav-item mr-2">
							<button id="perfil" class="btn-navbar btn-sm btn-outline-secondary" onclick="window.location.href=' . "''" . '">
								<img src="../img/user.png" class="align-text-top" width="20">
								<span id="nom-user">' . $_SESSION["nom"] . '</span>
							</button>
						</li>';
                } else {
                    echo '<li class="nav-item mr-2">
						<button class="btn-navbar btn-sm btn-outline-secondary" type="button" onclick="window.location.href=' . "'login/'" . '">' . $nav_login . '</button>
					</li>';
                }
                ?>
                <li class="nav-item">
                    <button id="carrito" class="btn-navbar btn-sm btn-outline-secondary" onclick="">
                        <img src="../img/compra.png" class="align-text-top" width="20">
                        <span id="num-items">0</span>
                    </button>
                </li>
            </ul>
        </nav>

        <div id="perfil">

                <div id="submenu" class="card">
                    <ul>
                        <li><a id="cuenta" href="javascript:perfil()">mi cuenta</a></li>
                        <li><a  id="compras" href="javascript:compras()">mis compras</a></li>
                        <li><a href="#">configuración</a></li>
                        <li id="logout"><a href="../php/logout.php">cerrar sesión</a></li>
                    </ul>
                </div>
                <div id="apartado" class="card">
                    <div class="row mb-5">
                            <div class="col-lg-3 col-sm-12 mt-4">
                                <img id="user" class="img" src="../img/userProfile.png">
                            </div>
                            <div class="col-lg-9 col-sm-12 my-auto">
                                <h1><?php echo $_SESSION["nom"]?></h1>
                                <h3><?php echo $_SESSION["nom"]?></h3>
                            </div>
                    </div>
                    <div id="detalles">
                        <!--
                        <div class="row mb-5">
                            <div class="col-12">
                                <h2>libros favoritos</h2>
                                <div id="favoritos" class="mt-3"></div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-12">
                                <h2>libros guardados</h2>
                                <div id="guardados" class="mt-3"></div>
                            </div>
                        </div>-->
                    </div>
                </div>
        </div>

    </div>
    <?php
		include $_SERVER['DOCUMENT_ROOT']."/footer.php"
	?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../js/carrito.js" type="text/javascript"></script>
    <script src="../js/profile.js" type="text/javascript"></script>
</body>

</html>