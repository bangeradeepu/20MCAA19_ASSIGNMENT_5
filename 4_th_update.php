<?php
$pass_photo = '';
    if(isset($_POST['form_submit']))
        {
        $pass_number = $_POST['pass_number'];
        $pass_f_name = $_POST['pass_f_name'];
        $pass_m_name = $_POST['pass_m_name'];
        $pass_l_name = $_POST['pass_l_name'];
        $pass_dob = $_POST['pass_dob'];
        $pass_nation = $_POST['pass_nation'];
        $pass_gender = $_POST['pass_gender'];
        $pass_address = $_POST['pass_address'];
        $pass_photo = $_POST['pass_photo'];
    $link = mysqli_connect("localhost", "root", "", "awt"); 
    if($link === false){ 

        die("ERROR: Could not connect. "  

                    . mysqli_connect_error()); 
    } 
            
    $sql = "UPDATE passport SET pass_number='$pass_number',pass_f_name='$pass_f_name',pass_m_name='$pass_m_name',pass_l_name='$pass_l_name',pass_dob='$pass_dob',pass_nation='$pass_nation',pass_address='$pass_address',pass_gender='$pass_gender',pass_photo='$pass_photo' WHERE id='$_GET[id]'"; 
    if(mysqli_query($link, $sql)){ 
        header("refresh:0.5; url=4_th.php");
        echo "Passport Updated"; 
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
            <?PHP
                    $con = mysqli_connect('localhost','root');
                    mysqli_select_db($con,'awt');
                    $query = " SELECT  * FROM `passport` WHERE id='$_GET[id]'";
                    $queryfire = mysqli_query($con, $query);
                    while($product = mysqli_fetch_array($queryfire)){
                ?> 
            <form method="POST">
                <input type="text" class="w3-input" name="pass_number" placeholder="Enter Passport Number" value="<?php echo $product['pass_number'];  ?>">
                <br>
                <input type="text" class="w3-input" name="pass_f_name" placeholder="Enter First Name" value="<?php echo $product['pass_f_name'];  ?>">
                <br>
                <input type="text" class="w3-input" name="pass_m_name" placeholder="Enter Middle Name" value="<?php echo $product['pass_m_name'];  ?>">
                <br>
                <input type="text" class="w3-input" name="pass_l_name" placeholder="Enter Last Name" value="<?php echo $product['pass_l_name'];  ?>">
                <br>
                <label for="dob">Enter Date of Birth</label>
                <input type="date" class="w3-input" name="pass_dob" id="dob" placeholder="Enter Date of Birth" value="<?php echo $product['pass_dob'];  ?>">
                <br>
                <input type="text" class="w3-input" name="pass_nation" placeholder="Enter Nationality" value="<?php echo $product['pass_nation'];  ?>">
                <br>
                <textarea class="w3-input" placeholder="Enter Address" name="pass_address" value="<?php echo $product['pass_address'];  ?>"></textarea>
                <label><span class="w3-red">(<b>Note:</b>Need to write address each time when you update.) </span></label>
                <br>
                <br>
                <label>Select Gender</label>
                <br>
                <?php
                    $var_male =  '';
                    $var_female = '' ;
                    $var_others = '';
                    if($product['pass_gender'] == 'Male')
                    {
                        $var_male = 'checked';
                    }
                    elseif($product['pass_gender'] == 'Female')
                    {
                        $var_female = 'checked';
                    }
                    elseif($product['pass_gender'] == 'Others')
                    {
                        $var_others = 'checked';
                    }
                    

                ?>
                <input type="radio" class="w3-radio" name="pass_gender" <?php  echo $var_male;  ?> value="Male">
                <label>Male</label>
                <input type="radio" class="w3-radio" name="pass_gender" <?php  echo $var_female;  ?> value="Female">
                <label>Female</label>
                <input type="radio" class="w3-radio" name="pass_gender" <?php  echo $var_others;  ?> value="Others">
                <label>Others</label>
                <br>
                <br>
                <label>Previous Photo</label>
                <br>
                <img src="<?php echo $product['pass_photo'];  ?>" width="150" height="150">
                <br>
                <br>
                <label>Select New Photo <span class="w3-red">(<b>Note:</b>Need to select photo each time when you update.) </span></label>
                <br>
                <input type="file" class="w3-input" name="pass_photo">
                <br>
                <br>
                <input type="submit" name="form_submit" class="w3-button w3-green w3-round" value="Update">
            </form>
            <?php  
                 }
                 ?> 
            <br>
        </div>
    </body>
</html>