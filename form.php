<!DOCTYPE html> 
<html> 
  <head> 
</head> 
  
<body> 
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
?>
<div class="form-container">
    <p><?php echo $firstName; ?></p>
    <p><?php echo $secondName; ?></p>
    <p><?php echo $houseNumber; ?></p>
    <p><?php echo $street; ?></p>
    <p><?php echo $city; ?></p>
    <p><?php echo $county; ?></p>
    <p><?php echo $postCode; ?></p>
    <p><?php echo $selectFood; ?></p>
</div>
<?php
}
?>

</body> 
</html>





