<?php 
    $title = "Da Vincijev kod";
    $tekst = "Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.";
    $link = "https://hr.wikipedia.org/Da_Vincijev_kod";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php
        echo "<h1>NASLOV: $title</h1>";
        echo "<p>TEKST: $tekst</p>";
        echo "<a href=$link target='_blank' >POVEZNICA</a>";
    ?>
</body>
</html>
