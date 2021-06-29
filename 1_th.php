<?php
define('DIR','');
?>
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
<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-container" style="max-width:600px">
    <br>
    <br>
    <form method=post enctype="multipart/form-data">
    <label>Choose File</label>
    <input type="file" name="filename" class="w3-input">
    <br>
    <input class="w3-button w3-round w3-green w3-small" type="submit" name="file_submit" value="Save">
	<input class="w3-button w3-round w3-red w3-small" type="reset" name="" value="reset" >
    </form>
    <br>
    <br>  	
</div>
</body>
</html>
<center>
<?php
$vCount=0;
$cCount=0;
$dCount=0;

if (isset($_POST['file_submit'])) {
	 
	 if($_FILES['filename']['type']=='text/plain'){
	 $filesize = $_FILES['filename']['size'];
	 $filenames= $_FILES['filename']['name'];
	 $content = $_FILES['filename']['tmp_name'];
	 	
	 	if(move_uploaded_file($content,DIR."files/".$filenames)){
	 		$string =  file_get_contents("files/".$filenames); 
	 		$filepath = "files/".$filenames;
   			$str = strtolower($string);
   
   for($i = 0; $i < strlen($str); $i++)
{
//Checks whether a character is a vowel
if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u')
{
//Increments the vowel counter
$vCount++;
}
//Checks whether a character is a consonant
else if($str[$i] >= 'a' && $str[$i] <= 'z')
{
//Increments the consonant counter
$cCount++;
}else if ($str[$i] >='0'  && $str[$i] <= '9') {
	//Increments the digit counter
	$dCount++;
}
}

substr_count($str, ' ');
$sCount = $i-$cCount-$vCount-$dCount-substr_count($str,' ');
echo "<h3>Number of vowels : <b>" . $vCount."</br>";
echo "<h3>Number of consonants : <b>" . $cCount."</br>";
echo "<h3>Number of words : <b>" . str_word_count($str)."</br>";
echo "<h3>Number of digits : <b>" . $dCount."</br>";
echo "<h3>Number of Special Characters : <b>" .$sCount."<br>" ;
echo "<h3>Number of lines : <b>" . count(file($filepath))."</br>";
echo "<h3>Size of file : <b>" . number_format($filesize/1024,3)." KB</br>";

}else{
	echo "<h1>Something Went Wrong. Try Again";
}
	 	}else{
	 			echo "<h1>Please Upload text file";
	 	} 
}

?>
</center>