# PDO-Connection with PHP
A PHP connection class with PDO

A connection class using PDO AND PHP

Coded with love by Blatacharry #1-20-2017...
You can create different connections for different databases using a single class

Usage manual

creating a new connection

$var = new Database();

create the variables for the connection details
host of database
$host = "localhost";

name of database
$name = "db_app";

user of database
$user = "root";

password of database 
$pass = "abcdef";

then!!! the database driver you are using !IMPORTANT...
$driver = "mysql"; or mysqli ;

$handler = $var->_dbConnection();
