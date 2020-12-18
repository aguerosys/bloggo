<?php session_start();
    include('cfg/db.php');

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email']; 
		$records = mysqli_query($conn, "SELECT id, email, password FROM user WHERE email = '$email'");
        $result= mysqli_fetch_assoc($records);
        @$hash = $result['password'];
        @$id = $result['id'];
        
        
        $message = '';

        if (password_verify($_POST['password'], $hash)){
	    	   
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;
	        echo "<script language=Javascript> location.href=\"index.php\"; </script>";
            die();          
        }else{
            echo('Contraseña o email incorrectos..');
        }
    }else{
        if (isset($_POST['load'])){
            $message = 'Campos vacios';
            echo ($message);

        }
    }

?>