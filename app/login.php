<?php session_start();

    if (isset($_SESSION['email'])){
        header('location: index.php');
    }else{

    }


    include ('inc/header_login.php');
?>



<div class="login__container">
    <form action="load_login.php" method="post">
        <h1 class="login__container-title">Iniciar sesión</h1>
        <p class="login__container-item">Email</p>
        <input class="input" type="text" name="email" placeholder="Email.." required>
        <p class="login__container-item">Password</p>
        <input class="input" type="password" name="password" id="password" placeholder="Contraseña.." required>
        <br>
        <input class="submit" type="submit" name="load" value="Ingresar" >
    </form>
    <p class="login__container-item">Aun no tienes tu cuenta? <a href="register.php">Registarte</a></p>
</div>

<?php 
    include ('inc/footer_login.php');
?>