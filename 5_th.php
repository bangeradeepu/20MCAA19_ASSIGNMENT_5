
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title></title>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<body>
<div class="w3-container w3-full w3-small w3-margin-top w3-card-4"">
    <h2 class="w3-center">Uchiha Bank</h2>
    <div class="w3-center">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-teal">Create Account</button>
    <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-round w3-yellow">Withdraw</button></a>
    <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-round w3-green">Deposite</button></a>
    <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-round w3-blue">Check Balance</button></a>
    </div>
    <br>
    <br>
</div>
<!-- Add money -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <h3>Create Account</h3>
      </div>

      <form class="w3-container" action="" method="post">
        <div class="w3-section w3-tiny">
          <label><b>Account Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Account Number" name="acno" required>
          <label><b>First Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter First Name" name="fname" required>
          <label><b>Last Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Last Name" name="lname" required>
          <label><b>Enter DOB</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="" name="dob" required>
          <label><b>Select Gender</b></label>
          <br>
          <input class="w3-radio w3-border w3-margin-bottom" type="radio" placeholder="Enter Username" name="gender" value="Male" required>
          <lable>Male</lable>
          <input class="w3-radio w3-border w3-margin-bottom" type="radio" placeholder="Enter Username" name="gender" value="Female" required>
          <lable>Female</lable>
          <input class="w3-radio w3-border w3-margin-bottom" type="radio" placeholder="Enter Username" name="gender" value="Others" required>
          <lable>Others</lable>
          <br>
          <label><b>Enter Amount</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Amount" name="amt" required>
          
          <input type="submit" class="w3-button w3-block w3-green w3-section w3-padding" value="Create" name="create">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Withdraw -->
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <h3>Withdraw Amount</h3>
      </div>

      <form class="w3-container" action="" method="post">
      <label><b>Account Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Account Number" name="acno" required>
          <label><b>Enter Amount</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Amount" name="amt" required>
          
          <input type="submit" class="w3-button w3-block w3-green w3-section w3-padding" value="Withdraw" name="with">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- deposite -->
<div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <h3>Deposite Amount</h3>
      </div>

      <form class="w3-container" action="" method="post">
      <label><b>Account Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Account Number" name="acno" required>
          <label><b>Enter Amount</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Amount" name="amt" required>
          
          <input type="submit" class="w3-button w3-block w3-green w3-section w3-padding" value="Deposite" name="dep">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Balance -->
<div id="id04" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <h3>Check Balance</h3>
      </div>

      <form class="w3-container" action="" method="post">
      <label><b>Account Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Account Number" name="acno" required>
        <input type="submit" class="w3-button w3-block w3-green w3-section w3-padding" value="Check" name="bal">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<center>
<!-- Create Account -->
<?php
if (isset($_POST['create'])) {

	$con = mysqli_connect("localhost","root","","awt");

if (mysqli_connect_errno()) {
  echo "<h2>Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if($_POST['amt']< '500'){
 echo "<h2>Minimum amount must be greater than 500 is required";
}else{
	$qry = mysqli_query($con,"SELECT * FROM bank where acno=".$_POST['acno']);
	
if (mysqli_num_rows($qry)>0) {
	echo "<h2>Account number already Exist";
}else{

	$query = mysqli_query($con,"INSERT INTO `bank`(`acno`, `fname`, `lname`, `dob`, `gender`, `balance`) VALUES ('".$_POST['acno']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['amt']."')")or die(mysqli_error($con));
if ($query) {
	echo "<h2>Account Created";
}else{
	echo "<h2>Account not created";
}
}
}
}
?>

<!-- Withdraw -->

<?php
if (isset($_POST['with'])) {

	$con = mysqli_connect("localhost","root","","awt");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$qry = mysqli_query($con,"SELECT * FROM bank where acno=".$_POST['acno']);
if (!$qry) {
	echo "Account nummber not found";
}else{
	$qry1 = mysqli_fetch_array($qry, MYSQLI_ASSOC);
	if (($qry1['balance']-$_POST['amt'])>500) {
		$upqry = mysqli_query($con,"UPDATE `bank` SET `balance`=".($qry1['balance']-$_POST['amt'])." WHERE acno =".$_POST['acno'])or die(mysqli_error($con));
		if($upqry){
			echo "<h1><b>". $_POST['amt']."</b> Rs Debited. Balance =".($qry1['balance']-$_POST['amt']);
		}else{
			echo "<h1>Something went wrong";
		}
	}else{
		echo "<h1>Insufficiant Balance";
	}
}
}
?>
<!-- Deposite -->
<?php
if (isset($_POST['dep'])) {

	$con = mysqli_connect("localhost","root","","awt");

// Check connection
if (mysqli_connect_errno()) {
  echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$qry = mysqli_query($con,"SELECT * FROM bank where acno=".$_POST['acno']);
if (!$qry) {
	echo "<h1>Account nummber not found";
}else{
         $qry1 = mysqli_fetch_array($qry, MYSQLI_ASSOC);
		$upqry = mysqli_query($con,"UPDATE `bank` SET `balance`=".($qry1['balance']+$_POST['amt'])." WHERE acno =".$_POST['acno'])or die(mysqli_error($con));
		if($upqry){
			echo "<h1><b>". $_POST['amt']."</b> Rs Credited. Balance =".($qry1['balance']+$_POST['amt']);
		}else{
			echo "<h1>Something went wrong";
		}
}
}
?>
<!-- Balance -->
<?php
if (isset($_POST['bal'])) {

	$con = mysqli_connect("localhost","root","","awt");

// Check connection
if (mysqli_connect_errno()) {
  echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$qry = mysqli_query($con,"SELECT * FROM bank where acno=".$_POST['acno']);
if (!$qry) {
	echo "<h1>Account nummber not found";
}else{
		$qry1 = mysqli_fetch_array($qry, MYSQLI_ASSOC);
		echo "<h1><b>Name :</b>".$qry1['fname']." ".$qry1['lname']."<br>";
		echo "<h1><b>Total Balance is:</b> Rs.".$qry1['balance'];
}
}
?>
</center>