<?php
$host = "fdb13.awardspace.net";
$user = "1772456_br";
$pass = "qamonkey1";
$db = "1772456_br";

$link = new mysqli($host, $user, $pass, $db);

if ($link->connect_errno) {
	echo "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
}
?>