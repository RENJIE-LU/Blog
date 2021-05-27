<a href="index.php"><B>index</B></a>
<a href="add.php"><B>add blog</B></a>
<hr>

<?php
include("conn.php"); 

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql ="select * from blog  where id='$id' ";    
        $query = mysql_query($sql);
        $rs = mysql_fetch_array($query);
        
        $sqlup = "update blog set hits=hits+1 where id='$id'";
        mysql_query($sqlup);
    }



?>
<h2>title: <?php echo $rs['title']; ?> </h1>
<h3>date: <?php echo $rs['data']; ?>  
click number: <?php echo $rs['hits']; ?></h3>
<hr>
<p>contents:<?php echo $rs['contents']; ?></p>