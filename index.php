<a href="index.php"><B>index</B></a>
<a href="add.php"><B>add blog</B></a>
<br><br>
<form action="" method="get" style='align:"right"'>
    <input type="text" name="keys" >
    <input type="submit" name="subs" >
</form>
<hr>

<?php
include("conn.php"); //Introduce to connect to the database
    
    if (!empty($_GET['keys'])) {
        $key = $_GET['keys'];
        $w = " title like '%$key%'";

    }else{
        $w=1;
    }

    $sql ="select * from blog where $w order by id desc limit 5";
    $query = mysqli_query($sql);
    
    while ($rs = mysqli_fetch_array($query)) {


?>
<h2>title: <a href="view.php?id=<?php echo $rs['id']; ?>"><?php echo $rs['title']; ?></a>
    | <a href="edit.php?id=<?php echo $rs['id']; ?>">edit</a> 
    | <a href="del.php?id=<?php echo $rs['id']; ?>">delete</a> |
</h2>
<li>date: <?php echo $rs['data']; ?></li>
<p>contents:<?php echo iconv_substr($rs['contents'],0,30,"gbk"); ?>...</p>  
<hr>

<?php

};

?>