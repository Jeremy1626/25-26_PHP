<html>
<head>
    <?php include 'includes/header.php'; ?>
    <title>Contact Us Action</title>
</head>
<body>
<h1>See your information Below:</h1>
<!-- Name: <?php  echo $_GET["name"]; ?> <br />
Email: <?php echo $_GET["email"]; ?><br />
Message: <?php echo $_GET["message"]; ?><br /> -->

<?php
// Variable in PHP start with a $
// Data types are automatically assigned

/*$myFirstVariable = 5;
$anotherVariable = "Hello World!";

$num1 = 6;
$num2 = 7;

// Conditional statements (if/else/else if)
if($num1 > $num2){
    echo "num1 is bigger!";
}else{
    echo "num2 is bigger!";
}*/

// Fruit Rollups Cost $2.00
echo "<h2>You purchased " . $_GET["fruitQuant"] . " fruit rollups</h2>";
echo "<h2>The cost of your fruit rollups is " . $_GET["fruitQuant"] * 2 . " dollars.</h2>";
echo "<h2>Your chosen flavor " . $_GET["fruitFlav"] . ".</h2>";
?>

</body>
</html>