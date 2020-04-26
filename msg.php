<?php
session_start();



function checkIfEmailExist($email){

    if(empty($_SESSION['guests'])){
        return false;
    }

    $exist = false;
    foreach ($_SESSION['guests'] as $guest){

        if($guest['email'] == $email){
            $exist = true;
            break;
        }

    }

    return $exist;
}

if(isset($_POST['submit'])){

    echo "submitting";

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(checkIfEmailExist($email)){
        $msg = "you cant add more than one post in the graduation book";

        header('location:login.php?msg='.$msg);
    }

    $data =  [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];

    if(!empty( $_SESSION['guests'])) {
        $_SESSION['guests'] [] = $data;
    }else{
        $_SESSION['guests'] = [];
        $_SESSION['guests'] [] = $data;
    }


    header('location:thanks.php?msg=thank you');// this will redirect the to the specified page
}


?>

<html>
<head>
<title> msg.php </title>

</head>

<body>
<form action="" method="post">

<br> name <input type = "text" name = "name">
<br> email <input type = "text" name = "email">
<br> Your mssege <input type = "text" name = "message" maxlength = "160">
<br>
<br> select your photo <input type="file" name="fileToUpload">

<br> <input type = 'submit' value='login' name='submit'>
		
<br>


</form>
<?php
//
//if(isset($_POST['s']))
//{
//
//
//}
// if(preg_match ("/^[A-Z]+/",$_SEESION['name'])&& preg_match ("/^[A-Z]{3}[@] [A-Z] {4} \. [A-Z] /",$_SEESION['email']))
// {
//	 echo " ";
// }
//else
//	echo "Your input is wrong please try again";
//
//?>