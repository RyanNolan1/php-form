<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>kfc-form</title>
  </head>
  <body>
    <div class="container">
      <div class="logo-container">
        <img src="./kfc-logo.svg" />
      </div>
      <h1>THANK YOU FOR YOUR ORDER!</h1>
    <section class="form-section">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first-name"];
    $secondName = $_POST["second-name"];
    $houseNumberName = $_POST["house-number-name"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $county = $_POST["county"];
    $postCode = $_POST["post-code"];
    $selectFood = $_POST["select-food"];
?>
<div class="output-container">
    <p><?php echo "Hello " . $firstName . ","; ?></p>
    <p><?php echo "Thank you for your order of a " . $selectFood . "!"; ?></p>
    <div class="address-container">
    <p><?php echo "This is now making it's way to you at: </br>";
    echo $houseNumberName . "</br>";
    echo $street . "</br>";
    echo $city . "</br>";
    echo $county . "</br>";
    echo $postCode . "</br>";
    echo "Enjoy!";
    ?>
</p>
</div>
</div>
<?php
}
?>

</section>
  </div>
  </body>
</html>





