<?php
    include '../../authlogin/DBcon.php';

    if(isset($_POST['login'])){
       $user = $_POST['username_admin'];
       $pass = $_POST['password_admin'];

       $query = "SELECT * FROM admin WHERE username = ? AND password = ?";
       $statement = $con->prepare($query);
       $statement->execute([$user, $pass]);
        $count = $statement->rowCount();
        
        if($count > 0){
            session_start();
            $SESSION['admin'] = $user;

            echo "<script type='text/javascript'>document.location = 'management.php'; </script>";
        }
        else{
          echo 'error';
        }
    }

?>