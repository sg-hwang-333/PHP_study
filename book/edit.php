<?php
  include("./db_conn.php");
  $id = $_GET['idx'];
  $sql = "select * from book where id=".$id;
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array( $result );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
  </head>
  <body>
    <h1>Edit</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        title: <input type="text" name="title" value="<?php echo $row[ 'title' ]; ?>"><br>
        author: <input type="text" name="author" value="<?php echo $row[ 'author' ]; ?>"><br>
        price: <input type="text" name="price" value="<?php echo $row[ 'price' ]; ?>"><br>
        <button type="submit">Edit</button>
    </form>
  </body>
</html>