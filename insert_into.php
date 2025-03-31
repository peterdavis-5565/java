<?php
include "connect.php";
include "index.php";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $sex = $_POST["sex"];
    $country = $_POST["country"];
    $email = $_POST["email"];

    $sql = "insert into users (name, sex, country, email) values('$name', '$sex', '$country', '$email')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (empty($_POST['name']) && empty($_POST['sex']) && empty($_POST['country']) && empty($_POST['email'])) {
            echo "Data inserted successfully";
        } else {
            echo "Some Details are missing";
        }
    } else {
        echo "data not inserted";
    }
} else {
    header("Location: indexphp");
}
