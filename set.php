<?php

session_start();

$_SESSION['num']='num';
$_SESSION['fname']='fname';
$_SESSION['lname']='lname';
$_SESSION['mail']='mail';
$_SESSION['size']='size';
//$_SESSION['regName'] = $regValue;

?>

<form method="get" action="get.php">




<label>name</label><br>
 firstname<input type="text" name="fname" value=""></input><br>
last name<input type="text" name="lname" value=""></input><br>
E mail id <input type="text" name="mail" value=""></input><br>
psswrd<input type="text" name="pwd" value=""></input><br>
    
    <input type="submit">
</form>