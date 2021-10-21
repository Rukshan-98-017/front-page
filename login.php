<?php
session_start();

$con = mysqli_connect('localhost' , 'root' , '');
mysqli_select_db($con, 'register_form');


$Enter_Email = $_POST['Enter_Email'];
$Enter_Password = $_POST['Enter_Password'];

$s = " select * from register where name = '$Enter_Email";

$result  = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Login success ";
}else{
    echo "Login fail";

}

?>
