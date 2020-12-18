<?php session_start(); 
    include('cfg/db.php');
    
    if (isset($_SESSION['email'])){
        
    }else{
        header('location: login.php');
    }
    
    
    include ('inc/header.php');
?>

<!-- CONTENT -->

<div class="container">

    <div class="presentation">
        <div class="presentation-tp"> 
            <h1 class="presentation__title">Bienvenido a BLOGGO</h1> 
            <h3 class="presentation__subtitle">Donde podes encontrar tu espacio</h3>
        </div>
    </div>

    <h1 class="post-title">Ultimas publicaciones</h1>
    <h3 class="post-subtitle">Espacio para compartir tus propios articulos, <a class="link" href="post.php">crear post</a></h3>

    <?php

        $query = "SELECT *, DATE_FORMAT(created_at, '%d-%m-%Y %H:%i:%s') as created_at FROM post ORDER BY `post`.`created_at` DESC";
        $result_tasks = mysqli_query($conn, $query);


        while ($row = mysqli_fetch_array($result_tasks)){ ?>
            <?php 

                
                
                if (isset($_SESSION['email'])) { ?>
                    
                    <div class="card__post">
                        <div class="card__post-img"> 
                            <img class="card__post-image" src="upload_files/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">        
                        </div>
                        <div class="card__post-content">
                            <p class="card__post-title"><a href="post_view.php?id=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a></p>
                            <p class="card__post-description"><?php echo $row['description']; ?></p>
                            <p class="card__post-date">Creado por: <?php echo $row['author']; ?></p>
                            <p class="card__post-date">Fecha: <?php echo $row['created_at']; ?></p>
                        </div>                        
                    </div>
                    
                <?php } 
            ?>


        <?php } 
    ?>
  
    
   <!--  <div class="card__post">
        <div class="card__post-img">  </div>
        <div class="card__post-content">
            <p class="card__post-title">Titulo del post</p>
            <p class="card__post-description">Descripcion del post</p>
            <p class="card__post-date">Creado por: Ezedev@mail.com</p>
            <p class="card__post-date">Fecha: 08/12/2020</p>
        </div>
        
    </div> -->



</div>

<?php 
    include ('inc/footer.php');
?>