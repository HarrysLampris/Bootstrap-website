<?php
session_start();
require_once('config.php');





$sql = "SELECT * FROM mobilephone WHERE price = 610  LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$price]);

if($result)
	echo $result;
?>