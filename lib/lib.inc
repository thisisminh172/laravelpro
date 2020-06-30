<?php
function getConnect()
{
	/*
	test ket noi den csdl 1910db cua MySQL
	 */
	$host = "localhost:3308";
	$uid = "root";
	$pwd = "";
	$db = "1910db";

	$cn = mysqli_connect($host, $uid, $pwd, $db);
	if (!$cn) {
		echo "<h3>ket noi that bai</h3>";
	}
	return $cn;
}
?>