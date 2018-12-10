<?php
session_start();
require("connection.php");

unset($_SESSION['SESS_LOGGEDIN']);
unset($_SESSION['SESS_USERNAME']);
unset($_SESSION['SESS_USERID']);

session_destroy();
header("Location: ". $config_basedir);
require("footer.php");
echo 'Modify the logout.php file and after freezed this file';
?>