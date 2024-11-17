<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <p>Lista vozila:</p>
        <ul>
            <?php
            $cars = array("Audi", "BMW", "Renault", "Citroen");
            foreach ($cars as $car) {
                echo "<li><input type='radio' name='car' value='$car'> $car</li>";
            }
            ?>
        </ul>
        <button>POŠALJI</button>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["car"])) {
            $selectedCar = $_POST["car"];
            echo "Odabrali ste $selectedCar";
        }
        ?>
    </form>
</body>

</html>