<?php 
    include("./db_conn.php");
    $name = $_POST['name'];
    $content = $_POST['content'];

    $sql = "insert into memo(name, content) values('$name', '$content')";
    mysqli_query($conn, $sql);
    echo "<script>alert('추가되었습니다');</script>";

    mysqli_close($conn);

?>
<!-- 0;(초 후에)url=index.php(실행) -->
<meta http-equiv="refresh" content="0;url=index.html">