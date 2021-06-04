<?php
    session_start();
    include '..\authlogin\DBcon.php';
    
        $user = $_SESSION['username'];

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $cpass = $_POST['password'];
    $npass = $_POST['newPassword'];
    
    

    if(!empty($fullname)){
        $query = "UPDATE users SET fullname=? WHERE username =?";
       $statement = $con->prepare($query);
       $statement->execute([$fullname, $user]);
    }   
    if(!empty($email)){
        $query = "UPDATE users SET email=? WHERE username =?";
       $statement = $con->prepare($query);
       $statement->execute([$email, $user]);
    }   
    if(!empty($username)){
        $query = "UPDATE users SET username=? WHERE username =?";
       $statement = $con->prepare($query);
       $statement->execute([$username, $user]);
       $user = $username;
       $_SESSION['username'] = $username;
    }  
    if(!empty($cpass)){
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $statement = $con->prepare($query);
        $statement->execute([$user, $cpass]);
         $count = $statement->rowCount();
         
         if($count > 0){
             if(!empty($npass)){
                $query = "UPDATE users SET password=? WHERE username =?";
                $statement = $con->prepare($query);
                $statement->execute([$npass, $user]);
             }
            }
           
    }
    header('Location: change.php');
    exit(); 