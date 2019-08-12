<?php 
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'devise_db');

function getUsersData($id) {
	$array = array();
	$q = mysqli_query("SELECT * FROM users WHERE 'id' = "" ")
}

 ?>