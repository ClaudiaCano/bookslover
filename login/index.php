<!doctype html>
<?php
include '../php/es.php';
?>
<html lang="es">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $login_description;?>">
</head>
<link rel="icon" type="image/png" href="../img/icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- CSS -->
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/style.css">

<title><?php echo $login_title;?></title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <a class="text-center mt-5 mb-5" href="../">
                        <img id="logo" src="../img/bookslover_1_max.png" alt="bookslover">
                    </a>
                    <form class="form-signin mt-5 mb-5" action="../php/login.php" method="POST">
                        <h1 class="h3 mb-3 font-weight-normal"><?php echo $login_h1;?></h1>
                        <label for="inputEmail" class="sr-only"><?php echo $login_label_1;?></label>
                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="email" required autofocus>
                        <label for="inputPassword" class="sr-only"><?php echo $login_label_2;?></label>
                        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="contraseña" required>
                        <button class="btn btn-lg btn-primary btn-block mt-5" type="submit"><?php echo $login_button;?></button>
                    </form>
                    <div class="d-flex flex-row text-center mt-5">
                        <div id="iniciar" class="p-3"><?php echo $login;?></div>
                        <a id="registrar" href="../signup">
                            <div  class="p-3"><?php echo $signup;?></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>