<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="number" name="broj" id="broj">
        <button>Provjeri</button>
    </form>
    <?php
    function je_prost($broj)
    {
        if ($broj <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($broj); $i++) {
            if ($broj % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] = "POST" && !empty($_POST["broj"])) {
        $broj = $_POST["broj"];
        echo "Broj $broj";
        if (je_prost($broj)) {
            echo " je prost <br>";
        } else {
            echo " nije prost <br>";
        }
    }

    echo "Prosti brojevi manji od 100 su:<br>";
    for ($i = 2; $i < 100; $i++) {
        if (je_prost($i)) {
            echo $i . " ";
        }
    }
    ?>
</body>

</html>