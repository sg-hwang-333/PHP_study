<?php 
    include("./db_conn.php");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $content = $_POST['content'];

    $sql = "update memo set name='".$name."', content='".$content."' where id=".$id;
    mysqli_query($conn, $sql);

    echo "<script>alert('Updated!')</script>";
    mysqli_close($conn);
?>
<meta http-equiv="refresh" content="0;url=index.php">