<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Peliculas</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body>

        <main class="login-form mt-5">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card ae_form">
                            <div class="card-header d-flex justify-content-center">
                                <img class="img-fluid umg-img" src="img/Peliculas.jfif" alt="">
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="form-group row mb-3">
                                        <div class="col-md-12">
                                        <label for="correo_electronico" class="col-form-label text-md-right">Correo Electronico</label>
                                            <input type="text" id="correo_electronico" class="form-control" name="correo_electronico" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-12">
                                        <label for="contraseña" class="col-form-label text-md-right">Contraseña</label>
                                            <input type="password" id="contraseña" class="form-control" name="contrasena" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <input class="btn btn-primary" type="submit" value="Login" name="submit" />
                                    </div>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php 

            if(isset($_POST["submit"])){
                if(!empty($_POST['correo_electronico']) && !empty($_POST['contrasena'])) {

                    $user=$_POST['correo_electronico'];
                    $pass=$_POST['contrasena'];

                    $dbusername = 'aestrada@miumg.edu.gt';
                    $dbpassword = 123456;

                    if($user == $dbusername && $pass == $dbpassword) {
                        header("Location: /contenido.php");
                        echo '<p>Success</p>';
                    } else {
                        echo 'Usuario o Contraseña invalida';
                    }

                }
            }
        
        ?>

    </body>
</html>