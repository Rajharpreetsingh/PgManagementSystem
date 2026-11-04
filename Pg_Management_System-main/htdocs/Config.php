


<?php 

$DB_HOST = "sql102.hstn.me";
$DB_USER = "mseet_43350152";
$DB_PASS = "ucJP9amY6L8O";
$DB_NAME = "mseet_43350152_pgdata";

    
$conn=mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);



if(!$conn)
{
 echo "<script>alert('Error:Could_not_Connect_to_database');</script>";
}



?>




