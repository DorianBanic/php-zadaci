<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Ispis riječi u rečenici</h2>
    <form method="post">
        <input type="text" name="tekst" id="tekst">
        <button>ispiši broj riječi</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["tekst"])) {
        $tekst = $_POST["tekst"];
        $brojRiječi = str_word_count($tekst);
        echo "Tekst: $tekst sadrži $brojRiječi";
    }

    ?>
</body>

</html>