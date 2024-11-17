<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function igraj(izbor) {
            document.getElementById("izbor").value = izbor;
            document.getElementById("igraForma").submit();
        }
    </script>
</head>

<body>
    <h1>Odaberite kamen, škare ili papir:</h1>
    <form id="igraForma" method="post">
        <input type="hidden" id="izbor" name="izbor" value="">
        <input type="button" value="✊ Kamen" onclick="igraj('kamen')">
        <input type="button" value="✌ Papir" onclick="igraj('papir')">
        <input type="button" value="✋ Škare" onclick="igraj('škare')">
    </form>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kamen = "kamen";
    $škare = "škare";
    $papir = "papir";

    $izborKorisnika = $_POST["izbor"];
    $mogućiIzbori = array($kamen, $škare, $papir);
    $izborProtivnika = $mogućiIzbori[array_rand($mogućiIzbori)];

    echo "<h2>Vaš odabir: $izborKorisnika</h2>";
    echo "<h2>Protivnikov odabir: $izborProtivnika</h2>";

    if ($izborKorisnika === $izborProtivnika) {
        echo "<h2>Izjednačenje!</h2>";
    } elseif (
        ($izborKorisnika === $kamen && $izborProtivnika === $škare) ||
        ($izborKorisnika === $škare && $izborProtivnika === $papir) ||
        ($izborKorisnika === $papir && $izborProtivnika === $kamen)
    ) {
        echo "<h2>Pobjedili ste!</h2>";
    } else {
        echo "<h2>Izgubili ste!</h2>";
    }
}

?>

</html>