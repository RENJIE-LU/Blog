<?php
$dbhost = 'localhost'; 
$dbuser = 'root';            
$dbpass = '';       
$dbname = 'blog';
$dbtable = 'blog_table';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
echo 'success to connect database！';
mysqli_close($conn);
?>
