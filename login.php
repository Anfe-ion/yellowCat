<?php 
//Para capturar la data
require("login.class.php") 
?>
<?php 
	//Para revisar la data y crear un nuevo objeto login	
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | 𝐘𝐞𝐥𝐥𝐨𝐰 𝐂𝐚𝐭</title>
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
            <h2>Nuevo cliente</h2>
            <p>Registrandote podrás comprar más rápido, 
                verificar el estado de tu pedido y acceder a
                promociones.</p>
            <button id="register">Registrarme</button>
        </div>

        <div>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <h2>Cliente Registrado</h2><br>

            <label>Usuario</label><br><br>
            <input type="text" name="username"><br><br>

            <label>Contraseña</label><br>
            <input type="password" name="password"><br>

            <button type="submit" name="submit">Entrar</button>

            <p class="error"><?php echo @$user->error ?></p>
            <p class="success"><?php echo @$user->success ?></p>
	    </form>
        </div>

        
    </section>
    
    <!--Script hamburguer menu-->
    <script src="./assets/menu.js"></script>
    <!--Script Login-->
    <script src="./assets/login.js"></script>
</body>
</html>