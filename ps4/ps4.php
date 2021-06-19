<!-- Responsable De cette Page : Bennourine Fafa
     Groupe : 3 -->
   
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GBOX - Home</title>
        <link href="PS4Style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@700&family=Fira+Mono:wght@700&family=Francois+One&display=swap" rel="stylesheet"> 
        <link rel="icon" " href="../photo/control.png">    
    </head>
    <body>
        <header>
            <div class="navBar">
                <nav>
                <img src="../photo/control.png" height="50" width="55" style="position: relative; bottom: 5px; left: 10px;">
                    <p class ="home">GBOX</p>
                    <ul class="nav_ul">
                        <li class ="nav_li"><a href="../home/main.php#news" class="nav_a">News</a></li>
                     
                        <li class ="nav_li"><a href="../best selling/bestSelling.php" class="nav_a">Best Selling</a></li>
                        <li class ="nav_li"><a href="../video/video.php" class="nav_a">Videos</a></li>
                    </ul>
                    <?php include '../infopers/user.php'; ?>
                </nav>
            </div>
        </header>
        <div class="ps5">
            <a href="ps4Info.php">  
                <img src="../photo/ps4.jpg" class="ps5Img">   
                    <div class="gradient"></div>
                    <div class="ps5Text">Sony PlayStation 4 : prix, fiche technique, test et actualité - Consoles</div>
            </a>  
        </div>
        <p class="mostRec">Most Recently</p>
        <div class="articles">
        <div class="Content">
            <img src="../photo/img1A.png" class="image">

            <p class="title"><a href="ps5-games-on-ps.php"class="anchor">You can now play PS5 games on PS4 — here's how</a></p>
            <p class="text">The PS5 gets its fiirst major console update today and brings with it a very useful feature for gamers still on PS4. </p><br>
            <p class="author">by Rory Mellon 5 days ago</p>
       </div>
       <div class="Content">
        <img src="../photo/img2A.png" class="image">

        <p class="title"><a href="resident-evil.php"class="anchor">Forget PS5 — Resident Evil Village looks stunning on PS4 Pro</a></p>
        <p class="text">We’ve seen Resident Evil Village running on PS5, but it’s looking good on PS4 Pro, too.</p><br>
        <p class="author">

By Alan Martin 16 days ago </p>
   </div>
   <div class="Content">
    <img src="../photo/img3A.png" class="image">

    <p class="title"><a href="best-ps4-games.php"class="anchor">The best PS4 games in 2021</a></p>
    <p class="text">Whatever you like to play, the best PS4 games have something for everyone. 
    </p><br>
    <p class="author">

By Marshall Honorof 13 days ago </p>
</div>
<div class="Content">
<img src="../photo/img4A.jpg" class="image">

<p class="title"><a href="ps4-pro--vs--ps4-slim.php" class="anchor">PS4 Pro vs. PS4 Slim: Which PlayStation is Right For You?</a></p>
<p class="text">You?

Sony’s PS4 Pro and PS5 Slim are the two flavors on offer for the fourth generation PlayStation.But from these two choices which one should you bye?</p><br>
<p class="author">By Richard Priday 6 days ago</p>
</div>

<a href="https://www.psu.com/news/" class="view">View More</a>
       </div>
       <footer>
        <div class="footer">
           <ul class="plateforme"><span class="plateformeT">Plateforme</span>
               <li><a href="../home/main.php" class="aFooter">All</a></li>
               <li><a href="../ps5/ps5.php" class="aFooter">PlayStation 5</a></li>
               <li><a href="../ps4/ps4.php" class="aFooter">PlayStation 4</a></li>
               <li><a href="../XboxSeriesX/xboxSX.php" class="aFooter">XBOX Series X</a></li>
               <li><a href="../XboxOne/xboxOne.php" class="aFooter">XBOX ONE</a></li>
               <li><a href="../pc/pc.php" class="aFooter">PC</a></li>
               <li><a href="../nintendo-switch/ninetendo.php" class="aFooter">NINETENDO SWITCH</a></li>
           </ul> 
           <ul class="socialMedia"><span class="socialMediaT">Social Media</span>
               <li><a href="https://www.Facebook.com" class="aFooter">Facebook</a></li>
               <li><a href="https://www.instagram.com" class="aFooter">Instagram</a></li>
               <li><a href="https://www.twitter.com" class="aFooter">Twitter</a></li>
               <li><a href="https://www.Pinetrest.com" class="aFooter">Pinetrest</a></li>
               <li><a href="https://www.github.com" class="aFooter">GitHub</a></li>
           </ul>  
           <ul class="GBOX"><span class="GBOXT">GBOX</span>
               <li><a href="../home/main.php#news" class="aFooter">News</a></li>
           
               <li><a href="../best selling/bestSelling.php" class="aFooter">Best Selling</a></li>
               <li><a href="../video/video.php" class="aFooter">Videos</a></li>
              
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