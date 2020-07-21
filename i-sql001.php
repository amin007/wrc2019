<?php
	include 'tatarajah.php';
	$dsn = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
	$conn = new PDO($dsn, DB_USER, DB_PASS);
	$sql_query = "SELECT * FROM wrong_user_table";
	$stmt = $conn->prepare($sql_query);
	$stmt->execute();
	$result_set = $stmt->fetchAll();
	var_dump($result_set);
	/*Get the current error mode of PDO*/
	$current_error_mode = $conn->getAttribute(PDO::ATTR_ERRMODE);
	echo "<br>";
	echo "Value of PDO::ATTR_ERRMODE: ".$current_error_mode;
