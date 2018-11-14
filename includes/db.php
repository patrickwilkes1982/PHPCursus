<?php 

$db['db_host'] = "localhost";
$db['db_user'] = "Patrick";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach ($db as $key => $value) {

	define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// if ($connection) {
// 	echo "Hij doet het!!";
// } else {
// 	echo "Hij werkt nog niet!!!";
// }

 ?>