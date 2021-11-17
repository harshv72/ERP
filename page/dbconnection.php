<?php
session_start();
ob_start();
$con= mysqli_connect("localhost", "root", "", "erp") or die(mysqli_error($con));
?>