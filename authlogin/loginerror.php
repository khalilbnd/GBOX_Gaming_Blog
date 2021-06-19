<?php 
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>GBOX - Home</title>
        <link href="Loginerreur.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@700&family=Fira+Mono:wght@700&family=Francois+One&display=swap" rel="stylesheet"> 
        <link rel="icon" " href="../photo/control.png">    
    </head>
    <body>
        <header>
            <div class="navBar">
               
                <nav>
                <img src="../photo/control.png" style="position: relative; bottom: 5px; left: 10px;" width="55" height="50">                    <p class ="home">GBOX</p>
                    <ul class="nav_ul">
                        <li class ="nav_li"><a href="#" class="nav_a">News</a></li>
                       
                        <li class ="nav_li"><a href="#" class="nav_a">Best Selling</a></li>
                        <li class ="nav_li"><a href="#" class="nav_a">Videos</a></li>
                        
                    </ul>
                </nav>
                </div>
                </header>

                            <div class="vallhala">
                                <form action="loginAuth.php" method="POST" >
                                    <input type="text" placeholder="Username" name="username" class="input Case1">
                                    <input type="password" placeholder="Password" name="password" class="input Case2">
                                    <input type="submit" name="login" class="inputButton" value="Log in">
                                </form>
                                <div class="notFound">Username or password is incorrect</div>
            
                               
                                <img src="vallhala.jpg" class="vallhalaImg" >
                                <a href="SignUp.php" class="signUp">You don't have an account ?</a>
                            </div>
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