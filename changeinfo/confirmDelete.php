<?php
include '..\authlogin\DBcon.php';
session_start();
    $query = "DELETE FROM users WHERE username='". $_SESSION['username'] ."'";
    $delete = $con->query($query);

    echo '<script type="text/javascript">document.location ="/authlogin/logout.php";</script>';
?>