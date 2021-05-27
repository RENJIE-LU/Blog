<a href="index.php"><B>index</B></a>
<a href="add.php"><B>add blog</B></a>
<hr>


<?php
    
    include("conn.php"); 

    if (!empty($_GET['id'])) {
        $del = $_GET['id']; 
        $sql= "delete from blog where id='$del' ";
        mysql_query($sql);
        echo "delete success!";

    }

?>