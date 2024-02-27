<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first-name"];
    $secondName = $_POST["second-name"];
    $houseNumber = $_POST["house-Number"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $county = $_POST["county"];
    $postCode = $_POST["post-code"];
    $selectFood = $_POST["select-food"];

    echo "First Name: " . $firstName . "<br>";
    echo "Second Name: " . $secondName . "<br>";
    echo "House Number: " . $houseNumber . "<br>";
    echo "Street: " . $street . "<br>";
    echo "City: " . $city . "<br>";
    echo "County" . $county . "<br>";
    echo "Post Code: " . $postCode. "<br>";
    echo "Select Food: " . $selectFood . "<br>";
}
?>