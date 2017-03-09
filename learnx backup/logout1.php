<?php
include "core/init.php";
ob_start();
session_unset();
session_destroy();
header("location: index.php");
?>