<html>
<script src="snowstorm.js"></script>
<div style="background-image: url('Background-xmas.jpg');">
<body>

<h1 style="background-color:DodgerBlue;"><center><font size = "12">4 Kingdoms Photo Host</font></centre></h1>

<p><center><font size = "12">www.4-kingdoms.co.uk <img src="/pictures/4 Kingdoms Logo.png" alt="Smiley face" width="42" height="42" align="middle"> www.4k-photos.co.uk</font></center></p>

<p><center><font size = "6">Thank you for coming to our Magical Christmas Adventure</font></center></p>
<p><center><font size = "6">You can download the photos you purchased from our Christmas Experience by entering your code below and clicking search</font></center></p>


<p style="background-color:Tomato;"><center><font size = "12">Enter your details below:</font></center></p>

<form action="" method="POST">

<p><center><font size="8">Please enter your email address from booking</font></center></p>
<center><input type="text" name="email_entered" value=' '/> </center><br>

<p><center><font size = "8">Please enter your booking reference or barcode in the box below</font></center></p>
<center><font size = "12"><input type="text" name="search_entered" value=' '/></font></center> <br><br>

 
<center><input type="submit" name="submit" value="Search"/></center><br><br>
</form>
</body>
</html>

<?php

$email = $_POST['email_entered'];
$emaillength = strlen($email);

$search= $_POST['search_entered'];

$searchoriginal= $search;
$search= ltrim($search,'0');

$search= strtolower($search);
$search = +$search;

$searchlength = strlen($search);

$search= trim($search);

$search= explode(" ", $search);

$countsearchterms= count($search);

$submitbutton= $_POST['submit'];



?>




<?php

$directory = "Lcyg1xRbij3xfckDV9HMlvG2vZHfhDbvoikgcXLb5Lnn7GQQcYpVGt63kDkLIkpA/";

if($emaillength < 5){
	echo "No email entered";
}else{

if ($searchlength < 5 ){

	echo "Not enough digits entered for reference or barcode";
}else{
if ($submitbutton){
if (!empty($searchoriginal)) 
{
if (is_dir($directory)){

  if ($open = opendir($directory)){
if ($countsearchterms > 0)
	{
		echo "Please right click on the photo and click 'Download' or 'Save' to store the photo on your device.";
		echo "<br><br>";
	}
if ($countsearchterms == 1)
{
    while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	
	
      if ((strpos("$file",  "$search[0]") !== false) && (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	$array[] += "$file";
	 echo "<img style='width: 1200px;' src='/Lcyg1xRbij3xfckDV9HMlvG2vZHfhDbvoikgcXLb5Lnn7GQQcYpVGt63kDkLIkpA/$fileoriginal' alt='Christmas 1' class='center'>". "<br><br><hr>";

}

    }
}
else if ($countsearchterms == 2) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false)) && (($fileextension == "jpg") 
|| ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp"))) {
	$array[] += "$file";
	 echo "<img style='width: 1200px;' src='/Lcyg1xRbij3xfckDV9HMlvG2vZHfhDbvoikgcXLb5Lnn7GQQcYpVGt63kDkLIkpA/$fileoriginal' alt='Christmas 1' class='center'>". "<br><br><hr>";
}
 
	
    }
    

}

else if ($countsearchterms == 3) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)) 
&& (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	$array[] += "$file";
	 echo "<img style='width: 1200px;' src='/Lcyg1xRbij3xfckDV9HMlvG2vZHfhDbvoikgcXLb5Lnn7GQQcYpVGt63kDkLIkpA/$fileoriginal' alt='Christmas 1' class='center'>". "<br><br><hr>";
}
 
	
    }
    

}

else if ($countsearchterms == 4) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false))
&& (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	$array[] += "$file";
	echo "<img style='width: 1200px;' src='/Lcyg1xRbij3xfckDV9HMlvG2vZHfhDbvoikgcXLb5Lnn7GQQcYpVGt63kDkLIkpA/$fileoriginal' alt='Christmas 1' class='center'>". "<br><br><hr>";
}
 
	
    }
    

}

else if ($countsearchterms == 5) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false)) && (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	$array[] += "$file";
	echo "<img style='width: 1200px;' src='/Lcyg1xRbij3xfckDV9HMlvG2vZHfhDbvoikgcXLb5Lnn7GQQcYpVGt63kDkLIkpA/$fileoriginal' alt='Christmas 1' class='center'>". "<br><br><hr>";
}
}  
}
else if ($countsearchterms == 6) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false)) && (($fileextension == "jpg") || ($fileextension == "jpeg") 
|| ($fileextension == "png") || ($fileextension == "bmp")))
	{
	$array[] += "$file";
	echo "<img style='width: 1200px;' src='/Lcyg1xRbij3xfckDV9HMlvG2vZHfhDbvoikgcXLb5Lnn7GQQcYpVGt63kDkLIkpA/$fileoriginal' alt='Christmas 1' class='center'>". "<br><br><hr>";
}
}  
}
else if ($countsearchterms == 7) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);

      if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false)&& (strpos("$file",  "$search[3]") !== false)
&& (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false) && (strpos("$file",  "$search[6]") !== false))
&& (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp")))
	{
	$array[] += "$file";
	echo "<img style='width: 1200px;' src='/Lcyg1xRbij3xfckDV9HMlvG2vZHfhDbvoikgcXLb5Lnn7GQQcYpVGt63kDkLIkpA/$fileoriginal' alt='Christmas 1' class='center'>". "<br><br><hr>";
}
}  
}
closedir($open);
    }

  }//while loop

$arraycount= count($array);

if ($arraycount == 0)
{
echo "No results for this search entered";
}
}
}
}
}
?>