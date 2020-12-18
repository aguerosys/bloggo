<?php session_start();
    include ('inc/header_login.php');
?>



<div class="login__container">
    <form action="user_save.php" method="post">
        <h1 class="login__container-title">Registrarte</h1>
        <p class="login__container-item">Nombre</p>
        <input class="input" type="text" name="name" placeholder="Nombre.." required>
        <p class="login__container-item">Email</p>
        <input class="input" type="text" name="email" placeholder="Email.." required>
        <p class="login__container-item">Password</p>
        <input class="input" type="password" name="password" id="password" placeholder="Contraseña.." required>       
        <br>
        <input class="submit" type="submit" name="save" value="Registrarse" >

    </form>
    <p class="login__container-item"> Ya tenes tu cuenta? <a href="login.php">Iniciar sesión.</a></p>

</div>

<?php 
    include ('inc/footer_login.php');
?>