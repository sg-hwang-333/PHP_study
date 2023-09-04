<?php 
    include("./db_conn.php");

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    
    $sql = "update book set title='".$title."', author='".$author."', price='".$price."' where id=".$id;
    mysqli_query($conn,$sql);
    echo "Updated!";

    mysqli_close($conn);
?>

<br>
<button onclick="location.href='list.php'">Back</button>