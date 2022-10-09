<?php
session_start();
indlude_once 'dbh.php';
$sessiononid = $_SESSION['id'];

$filename = "upload/profile" .$sessiononid. "*";
$filename = glob($filename);
$file