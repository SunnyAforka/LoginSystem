<?php 
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'devise_db');

function getUsersData($id) {
	$array = array();
	$q = mysqli_query("SELECT * FROM users WHERE 'id' = "" ")
}
//Still working on this part of the project to display every infomation about user on the welcome page when the user login..
 ?>
