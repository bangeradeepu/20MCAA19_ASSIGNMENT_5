<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title></title>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<body>

<?php
if (isset($_POST['form_submit'])) {

	session_start();
	$name = $_POST['name'];
	$seat = $_POST['seat'];
	$meal = $_POST['meal'];
	setcookie("name",$name);
	setcookie("seat",$seat);
	setcookie("meal",$meal);
	if (isset($_COOKIE["name"]) && isset($_COOKIE["meal"]) && isset($_COOKIE["seat"])) {
		echo "Cookie has been set!.<br><br>____________________<br><br>";
		echo "Press <a href='2_th_display.php'><button class='w3-red w3-button'>Go</button></a> to view Cookie..<br><br><br>";
	}else{
		echo "Please Refresh The page";
	}
}
?>

<div class="w3-card-4 w3-container">
    <br>
    <br>
<form method="POST">
    <input class="w3-input" type="text" name="name" placeholder="Enter Name">
    <br>
    <label>Seat Selection</label>
    <br>
    <input type="radio" class="w3-radio" name="seat" value="Window">
    <label>Window</label>
    <br>
    <input type="radio" class="w3-radio" name="seat" value="Aside">
    <label>Aside</label>
    <br>
    <input type="radio" class="w3-radio" name="seat" value="Center">
    <label>Center</label>
    <br>
    <br>
    <label>Meal Selection</label>
    <br>
    <input type="radio" class="w3-radio" name="meal" value="Veg">
    <label>Veg</label>
    <br>
    <input type="radio" class="w3-radio" name="meal" value="Non-Veg">
    <label>Non-Veg</label>
    <br>
    <input type="radio" class="w3-radio" name="meal" value="Diabetic">
    <label>Diabetic</label>
    <br>
    <input type="radio" class="w3-radio" name="meal" value="Child">
    <label>Child</label>
    <br>
    <br>
    <br>
    <input class="w3-button w3-red" type="submit" name="form_submit">
    <br>
    <br>
</form>
</div>
</body>
</html>