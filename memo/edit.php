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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 
</head>
<body>
    <h1>수정하기</h1>
    <table border=1 class="table">
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" value="<?php echo $row['name']; ?>"><td>
            </tr>
            <tr>
                <td>Content: </td>
                <td><input type="text" name="content" value="<?php echo $row['content']; ?>"><td>
            </tr>
            <tr>
                <td> <button type="submit">수정하기</button> </td>
            </tr>
        </form>
    </table>
</body>
</html>
