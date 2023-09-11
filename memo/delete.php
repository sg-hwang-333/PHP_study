<?php 
    include("./db_conn.php");
    $id = $_GET['idx'];

    $sql = "delete from memo where id = ".$id;
    mysqli_query($conn, $sql);

    echo "<script>alert('삭제되었습니다');</script>";

    mysqli_close($conn);

?>
<br>
<meta http-equiv="refresh" content="0;url=index.php">