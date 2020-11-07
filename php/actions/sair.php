<?php

require_once("db_connect.php");

$_SESSION['id'] = "";
$_SESSION['email'] = "";
$_SESSION['senha'] = "";

header("Location: ../../index.php");

?>