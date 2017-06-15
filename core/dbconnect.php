<?php

 // this will avoid mysql_connect() deprecation error.
 // error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'santdbgd_geca');
 define('DBPASS', 'Saurabh@123#');
 define('DBNAME', 'aageca');
 
 global $conn;

 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysqli_select_db($conn,DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysqli_error($conn));
 }

 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysqli_error($conn));
 }


 ?>