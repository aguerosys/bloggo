<?php session_start(); 
    include('cfg/db.php');
    
    if (isset($_SESSION['email'])){
        
    }else{
        header('location: login.php');
    }
    
    
    include ('inc/header.php');
?>

<!-- CONTENT -->

<div class="container__post">
    <div class="container__card">
        <h1 class="container__card-title">Nueva publicacion</h1>
        <form action="post_save.php" method="post" enctype="multipart/form-data">
            <p class="">Titulo</p>
            <input class="input" type="text" name="title" placeholder="Titulo.." required>
            <p class="">Descripcion</p>
            <input class="input" type="text" name="description" id="description" placeholder="Descripcion.." required>
            <p class="">Contenido</p>
            <textarea class="input" name="content" id="" cols="30" rows="10" placeholder="Contenido.."></textarea>
            <input class="input" type="file" name="image">
            <br>
            <input class="submit" type="submit" name="save" value="Guardar publicacion" >
        </form>
    </div>
    
</div>

<?php 
    include ('inc/footer.php');
?>