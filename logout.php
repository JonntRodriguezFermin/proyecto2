<?php

$_SESSION['username'] = "";

unset($_SESSION['username']);

header('location:ingreso.php');	

?>