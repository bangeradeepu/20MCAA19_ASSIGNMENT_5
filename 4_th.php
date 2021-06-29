<html>
    <head>
        <meta charset="utf-8">
        <title></title>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">            
        </head>
    <body> 
        <h1 class="w3-center">Passport </h1>
        <div class="w3-container w3-full w3-small w3-margin-top w3-card-4"">
            <br>
            <a href="4_th_add.php"><button class="w3-button w3-teal w3-small">ADD New Passport</button></a>
            <br>
            <br>
            <br>
            <table class="w3-table w3-bordered w3-small w3-striped">
                <tr>    
                    <th>Passport Number</th>
                    <th>First Name</th>
                    <th>Mid Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>Nationality</th>
                    <th>Address</th>
                    <th>Geneder</th>
                    <th>Photo</th>
                    <th></th>
                </tr>
                <?PHP
                    $con = mysqli_connect('localhost','root');
                    mysqli_select_db($con,'awt');
                    $query = " SELECT  * FROM `passport`";
                    $queryfire = mysqli_query($con, $query);
                    while($product = mysqli_fetch_array($queryfire)){
                ?>  
                <tr>
                    <td><?php echo $product['pass_number'];  ?></td>
                    <td><?php echo $product['pass_f_name'];  ?></td>
                    <td><?php echo $product['pass_m_name'];  ?></td>
                    <td><?php echo $product['pass_l_name'];  ?></td>
                    <td><?php echo $product['pass_dob'];  ?></td>
                    <td><?php echo $product['pass_nation'];  ?></td>
                    <td><?php echo $product['pass_address'];  ?></td>
                    <td><?php echo $product['pass_gender'];  ?></td>
                    <td><img src="<?php echo $product['pass_photo'];  ?>" width="80" height="80"></td>
                    <td>
                        <a href="4_th_update.php?id=<?php echo $product['id'];  ?>"><button class="w3-button w3-small w3-green w3-hover-black w3-round"><i class="bi bi-pencil-square"></i></button></a>
                        <a href="4_th_delete.php?id=<?php echo $product['id'];  ?>"><button class="w3-button w3-small w3-red w3-round"> <i class="bi bi-trash"></i></button></a>

                    </td>

                </tr>
                <?php  
                 }
                 ?> 
            </table>
        </div>
       
    </body>
</html>