<?php

require_once "model/ConDB.php";
$query = "SELECT * FROM users";
$con = Connection::connection()->prepare($query);
$con->execute();
var_dump($con);

?>