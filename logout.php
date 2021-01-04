<?php ob_start(); ?>
<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");
ob_end_flush();
exit;
?>