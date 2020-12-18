<?php 
    include('cfg/db.php');

    if (isset($_POST['save'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $query = "INSERT INTO user(name, password, email) VALUES ('$name', '$password','$email')";
        $result = mysqli_query($conn, $query);

        if (!$result){
            die("Query Failed");
        }

        header('Location: login.php');
    }

?>