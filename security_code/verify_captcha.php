<?php
session_start();

$my_security_code = $_GET['my_security_code'];

$validate = "0";

if ($_SESSION['security_code'] == $my_security_code && !empty($_SESSION['security_code'])) {
	$validate = "1";
} else {
	$validate = "0";
}

echo $validate;
?>