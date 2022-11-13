<?php
// Opens a connection to the database
// Since it is a php file it will open in localhost when xampp server(Apache,Mysql) is on.
// It should be saved outside of the main web documents folder
// and imported when needed

/*
Command that gives the database user the least amount of power
as is needed. write in mysql
GRANT INSERT, SELECT, DELETE, UPDATE ON test3.* 
TO 'studentweb'@'localhost' 
IDENTIFIED BY 'turtledove';
SELECT : Select rows in tables
INSERT : Insert new rows into tables
UPDATE : Change data in rows
DELETE : Delete existing rows (Remove privilege if not required)
*/
echo "connect";
// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'studentweb');
DEFINE ('DB_PASSWORD', 'turtledove');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test1');


// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)  
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
echo "ed";
?>