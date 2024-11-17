<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function izracunajC() {
            const a = parseFloat(document.getElementById("a").value);
            const b = parseFloat(document.getElementById("b").value);
            if (!isNaN(a) && !isNaN(b)) {
                const c = (3 * a - b) / 2;
                document.getElementById("result").textContent = "Vrijednost c: " + c;
            }
        }
    </script>
</head>

<body>
    <p>Vrijednost a: <input type="number" id="a"></p>
    <p>Vrijednost b: <input type="number" id="b"></p>
    <button onclick="izracunajC()">Pošalji</button>
    <span id="result"></span>
</body>

</html>