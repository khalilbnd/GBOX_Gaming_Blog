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
            <a href="pcinfo.php">  
                <img src="wallpaper.jpg" class="ps5Img">   
                    <div class="gradient"></div>
                    <div class="ps5Text">Sony PlayStation 4 : prix, fiche technique, test et actualité - Consoles</div>
            </a>  
        </div>
        <p class="mostRec">Most Recently</p>
        <div class="articles">
        <div class="Content">
            <img src="../photo/fifa.webp" class="image">

            <p class="title"><a href="fifa.php"class="anchor">FIFA 21 is coming to EA Play and Xbox Game Pass for PC next week</a></p>
            <p class="text">FIFA 21, the latest addition to EA's long-running soccer series, is headed to EA Play and Xbox Game Pass Ultimate next week, and that means that Xbox Game Pass for PC subscribers are going to get it too.</p><br>
            <p class="author">by Rory Mellon 5 days ago</p>
       </div>
       <div class="Content">
        <img src="../photo/titanfall.jpeg" class="image">

        <p class="title"><a href="titanfall.php"class="anchor">Titanfall 2 is free for the weekend on Steam</a></p>
        <p class="text">Titanfall 2 is a really great FPS that, for a variety of reasons (but really, just one) tanked badly when it came out in 2016. Its release on Steam last year kicked off a remarkable resurgence in interest, however, which recently got another big boost thanks to the presence of Titanfall 2 content in Apex Legends.</p><br>
        <p class="author">

By Alan Martin 16 days ago </p>
   </div>
   <div class="Content">
    <img src="../photo/valorant.webp" class="image">

    <p class="title"><a href="valorant.php"class="anchor">VALORANT: Here is Breeze, the new tropical map, available</a></p>
    <p class="text">The sixth card made its debut in VALORANT with the final season, arriving on servers today. After posting a few images showing the paradisiacal atmosphere of the map, which contrasts completely with Icebox and its tundra, Riot Games presented it on video. 
    </p><br>
    <p class="author">

By Marshall Honorof 13 days ago </p>
</div>
<div class="Content">
<img src="../photo/lol.jpg" class="image">

<p class="title"><a href="lol.php" class="anchor">Quick Gameplay Thoughts: April 30</a></p>
<p class="text">One of our longer term goals is to increase position preference for the jungle in lower MMR. We’re attacking the problem from a few angles that we think will in particular reduce some of the esoteric optimizations and help onboard newer players to the role</p><br>
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