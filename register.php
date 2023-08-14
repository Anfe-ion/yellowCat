<!--Se usara un poco de php para relacionar con los demás archivos-->
<?php require("register.class.php") ?>
<!--Ahora para verificar si se dio clic en el botón-->
<?php
	if(isset($_POST['submit'])){
		/*
        Si es cierto, se creara un nuevo objeto nuevo de usuarioregistrado.
        Luego se pasará el usuario y contraseña ingresados.
        */
		$user = new RegisterUser($_POST['username'], $_POST['password']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | 𝐘𝐞𝐥𝐥𝐨𝐰 𝐂𝐚𝐭</title>
    <!--Icon-->
    <link rel="icon" href="./img/gato.png" type="image/x-icon">
    <!--Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;700;800&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">
    <!--Pacifico-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;700;800&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--Link CSS-->
    <link rel="stylesheet" href="./assets/index.css">
    <!--Login Styles-->
    <link rel="stylesheet" href="./assets/login.css">
    <!--Register Styles-->
    <link rel="stylesheet" href="./assets/register.css">
    <!--Header styles-->
    <link rel="stylesheet" href="./assets/header.css">
    <!--Footer styles-->
    <link rel="stylesheet" href="./assets/footer.css">
    <!--Header-->
    <script src="./assets/header.js"></script>  
    <!--Footer-->
    <script src="./assets/footer.js"></script>  
    
</head>

<body>

    <section>
        <div>
            <!--Se crea el form-->
            <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <h2>Registrate</h2>
                <p>Si ya tienes una cuenta, por favor ve a la <a href="./login.php">página de ingreso.</a></p>
                <!--Se crean los campos-->
                <label>Usuario</label><br><br>
                <input type="text" name="username"><br><br>

                <label>Contraseña</label><br>
                <input type="password" name="password"><br>
                <!--Boton registro-->
                <button type="submit" name="submit">Registrame</button>

                <!--P's para enviar los mensajes-->
                <!--Se añaden las propiedades-->
                <p class="error"><?php echo @$user->error ?></p>
                <p class="success"><?php echo @$user->success ?></p>
            </form>
        </div>
        
        <div>
            <a href="#"><img src="./img/promo.webp" alt="Promoción de e-bikes"></a>
        </div>
    </section>
    
    <!--Script hamburguer menu-->
    <script src="./assets/menu.js"></script>
</body>
</html>