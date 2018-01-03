<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'techon';
 
if(!mysql_connect($server, $username,  $password))
{
    exit('Error: could not establish database connection');
    echo "error";
}
if(!mysql_select_db($database))
{
    exit('Error: could not select the database');
    echo "error";
}
?>