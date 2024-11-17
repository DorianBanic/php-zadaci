<?php
$con = mysqli_connect("localhost", "root", "123", "my_db");

if (mysqli_connect_errno()) {
    die("Neuspješno povezivanje s bazom podataka: " . mysqli_connect_error());
}

$query = "SELECT users.firstname, users.lastname, countries.country_name 
          FROM users 
          INNER JOIN countries ON users.country_id = countries.id 
          ORDER BY users.lastname ASC";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Popis korisnika i njihovih država:</h2>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<p>" . $row['firstname'] . " " . $row['lastname'] . " (" . $row['country_name'] . ")</p>";
    }
} else {
    echo "<p>Nema korisnika u bazi.</p>";
}

mysqli_close($con);
