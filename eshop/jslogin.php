<?php
session_start();
require_once('config.php');


$username = $_POST['username'];
 $password = sha1($_POST['password']);
//$password = ($_POST['password']);


$sql = "SELECT * FROM client WHERE email = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['userlogin'] = $user;
		echo 'Logged in!';
	}else{
		echo 'There no user for that combo';		
	}
}else{
	echo 'There were errors while connecting to database.';
}
?>