<?php session_start();
    include ('cfg/db.php');

    include('inc/header.php');

    if (isset($_SESSION['email'])){
        
    }else{
        header('location: login.php');
    }


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM post WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row['description'];
            $content = $row['content'];
            $date = $row['created_at'];
            $author = $row['author'];

            
        }
    }



?>


<div class="container__view">
    <div class="container__elements">
        <div class="container__header">
            <div class="container__header-title">
                <p class="post_header-title"><?php echo $title ?></p>
                <p class="post_header-description"><?php echo $description ?></p>
            </div>
            <div class="container__header-date">
                <p class="post_header-date"><?php echo $date ?></p>
                <p class="post_header-author"><?php echo $author ?></p>
            </div>
        </div>

        <div class="container__body">
            <img class="post_image" src="upload_files/<?php echo $row['image']; ?>" alt="">
            <p class="post_content"><?php echo $content ?></p>
        </div>
    </div>
    



</div>


<?php
    include('inc/footer.php');
?>