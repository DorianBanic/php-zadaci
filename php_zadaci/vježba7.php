<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Izračun prosječne i konačne ocjene</h1>
    <form method="post">
        Ocjena iz prvog kolokvija <input type="number" name="prviKolokvij" id="prviKolokvij"> <br> <br>
        Ocjena iz drugog kolokvija <input type="number" name="drugiKolokvij" id="drugiKolokvij"> <br> <br>
        <button>POŠALJI</button>
    </form>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prviKolokvij = $_POST["prviKolokvij"];
    $drugiKolokvij = $_POST["drugiKolokvij"];
    $prosječnaOcjena = ($prviKolokvij + $drugiKolokvij) / 2;
    $konačnaOcjena = round($prosječnaOcjena);
    if (($prviKolokvij > 5 ||  $prviKolokvij < 1) || ($drugiKolokvij > 5 ||  $drugiKolokvij < 1)) {
        echo "Niste unjeli važeće ocjene";
    } elseif ($prviKolokvij == 1 && $drugiKolokvij == 1) {
        echo "Prosječna ocjena je $prosječnaOcjena, dok je konačna ocjena jednaka 1";
    } else {
        echo "Prosječna ocjena je $prosječnaOcjena, dok je konačna ocjena $konačnaOcjena";
    }
}
?>

</html>