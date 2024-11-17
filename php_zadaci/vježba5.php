<?php
$random = rand(1, 9);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        let random = <?php echo $random; ?>;

        function pogodi() {
            let broj = parseFloat(document.getElementById("broj").value);

            if (broj === random) {
                document.getElementById("gumb").textContent = "Pogodio si broj";
                document.getElementById("gumb").style.backgroundColor = "green";
                document.getElementById("gumb").style.color = "white";
            } else {
                document.getElementById("gumb").textContent = "Nisi pogodio broj";
                document.getElementById("gumb").style.backgroundColor = "red";
                document.getElementById("gumb").style.color = "white";
            }

            document.getElementById("ispis").textContent = "Zamišljen je broj " + random;
        }
    </script>
</head>

<body>
    <p>Igra (pogodi broj)</p>
    <p>Upiši jedan broj od 1 do 9 <input type="number" id="broj"></p>
    <button onclick="pogodi()" id="gumb">Pogodi</button>
    <span id="ispis"></span>
</body>

</html>