<?php session_start();

    include('cfg/db.php');

    if (isset($_POST['save'])){

        $nombre = $_FILES ['image']['name'];
        $tipo = $_FILES ['image']['type'];
        $size = $_FILES ['image']['size'];
        $ruta = $_FILES ['image']['tmp_name'];
        $destino = "upload_files/" . $nombre;
        if ($nombre !=""){
            copy($ruta, $destino);
        }

        $title = $_POST['title'];
        $description = $_POST['description'];
        $content = $_POST['content'];
        $author = $_SESSION['email'];

        $query = "INSERT INTO post(title, description, content, image, author) VALUES ('$title', '$description','$content', '$nombre', '$author')";
        $result = mysqli_query($conn, $query);

        if (!$result){
            die('Query Failed');
        }


        header("Location: index.php");
        
    }

?>