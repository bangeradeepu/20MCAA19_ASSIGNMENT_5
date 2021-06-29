<?php
    if(isset($_POST['form_submit']))
        {
        $pass_number = $_POST['pass_number'];
        $pass_f_name = $_POST['pass_f_name'];
        $pass_m_name = $_POST['pass_m_name'];
        $pass_l_name = $_POST['pass_l_name'];
        $pass_dob = $_POST['pass_dob'];
        $pass_nation = $_POST['pass_nation'];
        $pass_gender = $_POST['pass_gender'];
        $pass_photo = $_POST['pass_photo'];
        $pass_address = $_POST['pass_address'];
    $link = mysqli_connect("localhost", "root", "", "awt"); 
    if($link === false){ 

        die("ERROR: Could not connect. "  

                    . mysqli_connect_error()); 
    } 
            
    $sql = "INSERT INTO passport(pass_number,pass_f_name,pass_m_name,pass_l_name,pass_dob,pass_nation,pass_gender,pass_photo,pass_address) VALUES('$pass_number','$pass_f_name','$pass_m_name','$pass_l_name','$pass_dob','$pass_nation','$pass_gender','$pass_photo','$pass_address')"; 
    if(mysqli_query($link, $sql)){ 
       // header("refresh:0.1; url=getpass.php");
        echo "Thank your for registering"; 
    } else { 
        echo "ERROR: Could not able to execute $sql. "  
         . mysqli_error($link); 
    }  
    mysqli_close($link); 
  }
    ?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body> 
        <h1 class="w3-center">Passport Form</h1>
        &nbsp;&nbsp;<a href="4_th.php"><button class="w3-button w3-teal w3-small">Got to Passport List</button></a>

        <div class="w3-container w3-full w3-small w3-margin-top w3-card-4">
            <br>
            <br>
            
            <form method="POST">
                <input type="text" class="w3-input" name="pass_number" placeholder="Enter Passport Number">
                <br>
                <input type="text" class="w3-input" name="pass_f_name" placeholder="Enter First Name">
                <br>
                <input type="text" class="w3-input" name="pass_m_name" placeholder="Enter Middle Name">
                <br>
                <input type="text" class="w3-input" name="pass_l_name" placeholder="Enter Last Name">
                <br>
                <label for="dob">Enter Date of Birth</label>
                <input type="date" class="w3-input" name="pass_dob" id="dob" placeholder="Enter Date of bort">
                <br>
                <input type="text" class="w3-input" name="pass_nation" placeholder="Enter Nationality">
                <br>
                <textarea class="w3-input" placeholder="Enter Address" name="pass_address"></textarea>
                <br>
                <label>Select Gender</label>
                <br>
                <input type="radio" class="w3-radio" name="pass_gender" value="Male">
                <label>Male</label>
                <input type="radio" class="w3-radio" name="pass_gender" value="Female">
                <label>Female</label>
                <input type="radio" class="w3-radio" name="pass_gender" value="Others">
                <label>Others</label>
                <br>
                <br>
                <label>Upload Photo </label>
                <br>
                <input type="file" class="w3-input" name="pass_photo">
                <br>
                <br>
                <input type="submit" name="form_submit" class="w3-button w3-green w3-round">
            </form>
            <br>
        </div>
       
    </body>
</html>