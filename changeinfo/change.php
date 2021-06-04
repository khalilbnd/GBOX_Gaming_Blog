<?php
    session_start();
include '..\authlogin\DBcon.php';

    $user = $_SESSION['username'];

    $query = 'SELECT * FROM users WHERE username = \'' . $user . '\'';
    $data = $con->query($query);

foreach($data as $row){
    $fullname = $row['fullname'];
    $email = $row['email'];
    $username = $row['username'];
    $password = $row['password'];
    
}
  
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>GBOX - Home</title>
        <link href="mainStyle.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@700&family=Fira+Mono:wght@700&family=Francois+One&display=swap" rel="stylesheet"> 
    <body>
       
            <div class="navBar">
               
                <nav>
                    <img src="control.jpg" height="50" width="55" style="right: 14;">
                    <p class ="home">GBOX</p>
                    <ul class="nav_ul">
                        <li class ="nav_li"><a href="#" class="nav_a">News</a></li>
                        <li class ="nav_li"><a href="#" class="nav_a">Best Selling</a></li>
                        <li class ="nav_li"><a href="#" class="nav_a">Videos</a></li>
                    </ul>
                </nav>
                <?php include '../infopers/user.php'; ?>
               
                <img src="battlefield.jpg" alt="Battlefield" class="battlefield">
                <form method="POST" action="changeinfo.php">

                <div class ="formChange">
                    
                <h1 class="titleSt">Here's A form if you wanna change your personal informations </h1>
                    <?php
                     echo '<input type="text" name="fullname" placeholder="'. $fullname . '">
                        <input type="email" name="email" placeholder="'. $email .'">
                        <input type="username" name="username" placeholder="'. $username .'">';
                     ?>
                </div>
                <div class="formPassword">
                    <h1 class="titleNd">Change your Password</h1>
                        <input type="password" name="password" placeholder="Current Password">
                        <input type="password" name="newPassword" placeholder="New Password">
                </div>
                <input type="submit" name="change" value="Change" class="change-btn">
                </form>
                <a href="/authlogin/logout.php" class="logout">Log-Out</a>
                <footer>
                                <div class="footer">
                                  <ul class="plateforme"><span class="plateformeT">Plateforme</span>
                                      <li><a href="#" class="aFooter">All</a></li>
                                      <li><a href="#" class="aFooter">PlayStation 5</a></li>
                                      <li><a href="#" class="aFooter">PlayStation 4</a></li>
                                      <li><a href="#" class="aFooter">XBOX Series X</a></li>
                                      <li><a href="#" class="aFooter">XBOX ONE</a></li>
                                      <li><a href="#" class="aFooter">PC</a></li>
                                      <li><a href="#" class="aFooter">NINETENDO SWITCH</a></li>
                                  </ul> 
                                  <ul class="socialMedia"><span class="socialMediaT">Social Media</span>
                                    <li><a href="#" class="aFooter">Facebook</a></li>
                                    <li><a href="#" class="aFooter">Instagram</a></li>
                                    <li><a href="#" class="aFooter">Twitter</a></li>
                                    <li><a href="#" class="aFooter">Pinetrest</a></li>
                                    <li><a href="#" class="aFooter">GitHub</a></li>
                                </ul>  
                                <ul class="GBOX"><span class="GBOXT">GBOX</span>
                                    <li><a href="#" class="aFooter">News</a></li>
                                    <li><a href="#" class="aFooter">Reviews</a></li>
                                    <li><a href="#" class="aFooter">Best Selling</a></li>
                                    <li><a href="#" class="aFooter">Videos</a></li>
                                    <li><a href="#" class="aFooter">Forum</a></li>
                                </ul>  
                                <ul class="termPrivacy">
                                    <li><a href="#" class="aFooter">About US</a></li>
                                    <li><a href="#" class="aFooter">Terms and conditions</a></li>
                                    <li><a href="#" class="aFooter">Privacy Policy</a></li>
                                    <li><a href="#" class="aFooter">Contact US</a></li>
                                </ul>   
                                </div>
                            </footer>

    </body>
    
</html>