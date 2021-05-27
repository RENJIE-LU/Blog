<a href="index.php"><B>index</B></a>
<a href="add.php"><B>add blog</B></a>
<hr>


<?php
include("conn.php"); //Introducing a connection database
if (!empty($_POST['sub'])) {
    $title = $_POST['title'];  //Gets the content of the Title form
    $con = $_POST['con'];      //Gets the contents of the Contents form
    $sql= "insert into blog values(null,'0','$title',now(),'$con')";
    mysql_query($sql);
    echo "insert success!";

}

?>

<form action="add.php" method="post">
    title   :<br>
    <input type="text" name="title"><br><br>
    contents:<br>
    <textarea rows="5" cols="50" name="con"></textarea><br><br>
    <input type="submit"  name="sub" value="submit">
    
</form>