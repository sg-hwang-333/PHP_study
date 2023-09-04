<?php 
    include("./db_conn.php");

    $id = $_GET['idx'];
    
    $sql = "delete from book where id=".$id;
    $result = mysqli_query($conn,$sql);

    echo "Deleted!";

    mysqli_close($conn);
?>
<br>
<button onclick="location.href='list.php'">Back</button>