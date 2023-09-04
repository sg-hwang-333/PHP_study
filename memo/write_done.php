<?php 
    include("./db_conn.php");
    $name = $_POST['name'];
    $content = $_POST['content'];

    $sql = "insert into memo(name, content) values('$name', '$content')";
    mysqli_query($conn, $sql);
    echo "Inserted!";

    mysqli_close($conn);

?>