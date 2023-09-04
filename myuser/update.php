<?php 
    include("./db_conn.php");

    $id = $_POST['id'];
    $uid = $_POST['userid'];
    $uname = $_POST['username'];
    
    $sql = "update myuser set userid='".$uid."', username='".$uname."' where id=".$id;
    mysqli_query($conn,$sql);
    echo "Updated!";

    mysqli_close($conn);
?>

<br>
<button onclick="location.href='list.php'">Back</button>