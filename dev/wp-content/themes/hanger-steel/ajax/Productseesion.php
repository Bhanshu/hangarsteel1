<?php 
session_start();
$value = $_GET['test'];
$_SESSION['test']= $value;
?>