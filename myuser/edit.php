<?php
  include("./db_conn.php");
  $id = $_GET['idx'];
  $sql = "select * from myuser where id=".$id;
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array( $result );
?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
  </head>
  <body>
    <h1>Edit</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        userid: <input type="text" name="userid" value="<?php echo $row[ 'userid' ]; ?>"><br>
        username: <input type="text" name="username" value="<?php echo $row[ 'username' ]; ?>"><br>
        <button type="submit">Edit</button>
    </form>
  </body>
</html>