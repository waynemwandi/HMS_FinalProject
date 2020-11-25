<?php
define('DB_SERVER','localhost');
define('DB_USER','id14948300_root');
define('DB_PASS' ,'[GTXk(|V7QKy(Ctk');
define('DB_NAME', 'id14948300_hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
?>