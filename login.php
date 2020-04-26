<?php session_start();?>
<html>
<head>
<title> log in </title>

</head>

<body>

<?php
    if(isset($_GET['msg'])){ ?>

        <div style="background: red"><?=$_GET['msg']?></div>
        <?php
    }
?>
<a href="msg.php"> Gues</a>
<form action="GBook.php" method="post">

<br> username <input type = "text" name = "u">
<br> password <input type = "password" name = "p">
<br>  <input type = "submit" value = "login "  name = "s" >



</form>




</body>
</html>
<?php
if(isset($_POST['s']))
{
	setcookie('name',$_POST['u']);
	setcookie('pass',$_POST['p']);
	
	echo '<a href= "msg.php"></a>';
	
}
	
	
?>