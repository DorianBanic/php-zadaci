<?php 
    $naslov = "Da Vincijev kod";
    $tekst = "Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.";
    $poveznica = "https://hr.wikipedia.org/Da_Vincijev_kod";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $naslov; ?></title>
</head>
<body>
    <?php
        echo "<h1>NASLOV: $naslov</h1>";
        echo "<p>TEKST: $tekst</p>";
        echo "<a href=$poveznica target='_blank' >POVEZNICA</a>";
        /*Ime dokumenta je vježba1.php*/
    ?>
</body>
</html>
