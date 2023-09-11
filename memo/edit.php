<?php 
    include("./db_conn.php");
    $id = $_GET['idx'];
    $sql = "select * from memo where id=".$id;

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>수정하기</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"> <br>
        Content: <input type="text" name="content" value="<?php echo $row['content']; ?>"> <br>
        <button type="submit">수정하기</button>
    </form>
</body>
</html>
