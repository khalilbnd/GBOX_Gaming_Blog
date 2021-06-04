<?php

$file = fopen("..\infopers\user.php", "w") or die ("Unable to open file");
$text ='';
fwrite($file, $text);
fclose($file);

$file = fopen("..\infopers\user.php", "a") or die ("Unable to open file");

$text ='<?php
echo \'<a href="\authlogin\login.php"><img src="user-solid.svg" alt="Account" width="20" height="20" class="user"></a>\';
?>';
    fwrite($file, $text);
    fclose($file);
    header('Location: \home\main.php');

    session_destroy();
    ?>
    