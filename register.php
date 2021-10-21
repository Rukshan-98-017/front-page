<?php

session_start();

$con = mysqli_connect('localhost' , 'root' , '');
mysqli_select_db($con, 'register_form');

$Enter_Name = $_POST['Enter_Name'];
$Enter_User  = $_POST['Enter_User'];
$Enter_Email = $_POST['Enter_Email'];
$Enter_Number = $_POST['Enter_Number'];
$Enter_Password = $_POST['Enter_Password'];
$Confirm_Password = $_POST['Confirm_Password'];

$s = " select * from register where name = '$Enter_Email";

$result  = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "user email already using";
}else{
	$reg = "INSERT Into register (Enter_Name , Enter_User ,Enter_Email, Enter_Number, Enter_Password, Confirm_Password) values ('$Enter_Name' , '$Enter_User' , '$Enter_Email' , '$Enter_Number' , '$Enter_Password' , '$Confirm_Password')";
	mysqli_query($con, $reg);
	echo "Registration succesful";

}

?>