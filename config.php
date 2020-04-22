<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('HOST', 'localhost');
define('DB_NAME','hackaton');
define('USER','root');
define('PASS', '');
 
/* Attempt to connect to MySQL database */
try{
	$db=new PDO("mysql:host=".HOST.";dbname=".DB_NAME,USER,PASS);
	$db->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e){
	echo $e;
}
