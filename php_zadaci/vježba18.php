<?php
$con = mysqli_connect("localhost", "root", "123", "my_db");


if (mysqli_connect_errno()) {
    die("Neuspješno povezivanje s bazom podataka: " . mysqli_connect_error());
}

function getCountriesOptions($selected_id)
{
    global $con;
    $options = "";
    $query = "SELECT id, country_name FROM countries";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $selected = ($row['id'] == $selected_id) ? "selected" : "";
        $options .= "<option value='{$row['id']}' $selected>{$row['country_name']}</option>";
    }
    return $options;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country_id = $_POST['country_id'];

    $update_query = "UPDATE users SET firstname='$firstname', lastname='$lastname', country_id='$country_id' WHERE id='$user_id'";
    mysqli_query($con, $update_query);
}

$query = "SELECT users.id, users.firstname, users.lastname, users.country_id, countries.country_name 
          FROM users 
          INNER JOIN countries ON users.country_id = countries.id 
          ORDER BY users.lastname ASC";
$result = mysqli_query($con, $query);


if (mysqli_num_rows($result) > 0) {
    echo "<h2>Uređivanje korisnika i njihovih država:</h2>";
    echo "<form method='POST' action=''>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>";
        echo "<input type='hidden' name='user_id' value='{$row['id']}'>";
        echo "<label>Ime: <input type='text' name='firstname' value='{$row['firstname']}'></label><br>";
        echo "<label>Prezime: <input type='text' name='lastname' value='{$row['lastname']}'></label><br>";
        echo "<label>Država: <select name='country_id'>" . getCountriesOptions($row['country_id']) . "</select></label><br>";
        echo "<input type='submit' value='Spremi promjene'>";
        echo "</div><br>";
    }

    echo "</form>";
} else {
    echo "<p>Nema korisnika u bazi.</p>";
}

mysqli_close($con);
