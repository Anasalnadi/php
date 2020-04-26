<html>
<head>
<title> msg.php </title>

</head>

<body>
<form action="GBook.php" method="post">

<br> name <input type = "text" name = "n">
<br> email <input type = "text" name = "e">
<br> Your mssege <input type = "text" name = "m" maxlength = "160">
<br>
<br> select your photo <input type="file" name="fileToUpload">

<br> <input type = 'submit' value = 'login' name = 's'>
		
<br>


</form>
<?php
 session_start();

if(isset($_POST['s']))
{
$_SEESION['n'] = $_POST['n'];
$_SEESION['e'] = $_POST['e'];
$_SEESION['f'] = $_POST['f'];
$_SEESION['m'] = $_POST['m'];


}
 if(preg_match ("/^[A-Z]+  /",$_SEESION['name'])&& preg_match ("/^[A-Z]{3}[@] [A-Z] {4} \. [A-Z] /",$_SEESION['email']))
 {
	 echo " ";
 }
else 
	echo "Your input is wrong please try again";

?>