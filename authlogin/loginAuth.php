<?php
    include 'DBcon.php';

    if(isset($_POST['login'])){
       $user = $_POST['username'];
       $pass = $_POST['password'];

       $query = "SELECT * FROM users WHERE username = ? AND password = ?";
       $statement = $con->prepare($query);
       $statement->execute([$user, $pass]);
        $count = $statement->rowCount();
        
        if($count > 0){
            session_start();
            $_SESSION['username'] = $user;
            $file = fopen("..\infopers\user.php", "w") or die ("Unable to open file");

            $text ='<?php
            echo \'<a href="/changeinfo/change.php"><span class="userConnected">' . $user . '</span><img src="photo/user.png" alt="Account" width="20" height="20" class="userImg"></a>\';
            ?>';
         
                fwrite($file, $text);
                fclose($file);
                header('Location: \home\main.php');
        }
        else{
           header('Location: loginerror.php');
           exit(); 
        }
    }

?>