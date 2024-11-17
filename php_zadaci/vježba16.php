<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracijska Forma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Registration Form</h2>
        <form method="post">
            <label for="first_name">First Name *</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name *</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">Your E-mail *</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username *</label>
            <input type="text" id="username" name="username" required minlength="5" maxlength="10">

            <label for="password">Password *</label>
            <input type="password" id="password" name="password" required minlength="4">

            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="">molimo odaberite</option>
                <option value="Croatia">Croatia</option>
                <option value="Serbia">Serbia</option>
                <option value="Slovenia">Slovenia</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "korisnici";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $country = $_POST['country'];

        $sql = "INSERT INTO korisnik (first_name, last_name, email, username, password, country)
                    VALUES ('$first_name', '$last_name', '$email', '$username', '$password', '$country')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>

</html>