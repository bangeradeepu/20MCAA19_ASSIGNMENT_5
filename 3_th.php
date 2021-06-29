
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title></title>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<body>
<br>
<br>
<br>    
<br>
<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    <form class="w3-container" action="" method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="psw" required>
          <input class="w3-button w3-block w3-green w3-section w3-padding" type="submit" value="Login" name="form_submit">
        </div>
      </form>
    </div>
<center>
    <?php
if (isset($_POST['form_submit'])) {

	session_start();
		$_SESSION['name'] = $_POST['usrname'];
	
	if (!isset($_SESSION['count'])) {
		$_SESSION['count'] = 1;
		echo "<h1><b>".$_SESSION['name']."<b><br><br><br>";
		echo "<h3>This is your first visit</h3>";
	}else{
		$_SESSION['count']++;

		echo "<h3>Username: <b>".$_SESSION['name']."<b><br>";
		echo "<h3>Your Visiting count is <b>".$_SESSION['count'] . "</h3>";
	}
	
}
?>
</center>
</body>
</html>