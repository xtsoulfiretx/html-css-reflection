<?php
$servername = "localhost";
$username = "alexi";
$password = "Password12";
$dbname = "alexi";

try {
  $db = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo $e->getMessage();
  throw new ErrorException;
}