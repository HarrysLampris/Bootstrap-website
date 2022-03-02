<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	 $password 		= sha1($_POST['password']);
	//$password 		= ($_POST['password']);
	$phonenumber	= $_POST['phonenumber'];
	$address    	= $_POST['address'];
	$city           = $_POST['city'];
	$postal_code    = $_POST['postal_code'];

		$sql = "INSERT INTO client (firstname, lastname, email, password, phonenumber, address, city, postal_code) VALUES(?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $password, $phonenumber, $address, $city, $postal_code]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}