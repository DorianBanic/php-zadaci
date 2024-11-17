<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraživač korisnika</title>
</head>

<body>

    <h2>Pretražite korisnika po imenu ili prezimenu</h2>
    <form method="post">
        <label for="search_term">Ime ili Prezime:</label>
        <input type="text" id="search_term" name="search_term" required>
        <input type="submit" value="Pretraži">
    </form>

    <?php
    $con = mysqli_connect("localhost", "root", "123", "my_db");

    if (mysqli_connect_errno()) {
        die("Neuspješno povezivanje s bazom podataka: " . mysqli_connect_error());
    }

    $search_term = mysqli_real_escape_string($con, $_POST['search_term']);

    $query = "SELECT firstname, lastname FROM users 
          WHERE firstname LIKE '%$search_term%' OR lastname LIKE '%$search_term%' 
          ORDER BY lastname ASC";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Rezultati pretraživanja:</h2>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<p>" . $row['firstname'] . " " . $row['lastname'] . "</p>";
        }
    } else {
        echo "<p>Nema rezultata za pretraživanje: $search_term</p>";
    }

    mysqli_close($con);
    ?>

</body>

</html>