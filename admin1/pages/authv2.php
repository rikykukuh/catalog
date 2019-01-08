<?php
//Your setting here.
$userinfo = array(
    'aziz'=>'aziz', //User1
    'admin'=>'admin' //User2
    //'MoreUser'=>'MorePassword' //MoreUser
);

//Don't edit anything below.

//debugging
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//script start
session_start();

//mulai script login
//login
if(isset($_POST['username'])) {
if($userinfo[$_POST['username']] == ($_POST['password'])) {
$_SESSION['admin'] = $_POST['username'];
header('Location: ./index.php');
}else {
echo '<script>alert("Username atau Password salah!");</script>';
echo '<script>alert("Silahkan ulangi lagi!");</script>';
};
};
?>
