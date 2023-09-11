<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 
</head>
<body>
    <h1>목록보기</h1>
</body>
</html>

<table border="1" class="table">
<?php
    include("./db_conn.php");

    $sql = "select * from memo order by id asc";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $arr = Array("#", "Name", "Content", "ETC");
    echo "<tr>";
    for ($i = 0; $i < 4; $i++) {
        echo "<th>".$arr[$i]."</th>";
    }
    echo "</tr>";

    for ($i = 0; $i < $num; $i++) {
        echo "<tr>";
        $re = mysqli_fetch_row($result);
        for ($j = 0; $j < 3; $j++) {

            echo "<td>".$re[$j]."</td>";
        }
        echo "<td><a href='edit.php?idx=".$re[0]."'>수정</a> ";
        echo "<a href='delete.php?idx=".$re[0]."'>삭제</a></td>";
        echo "</tr>";
    }

?>
</table>
<form action="search.php" method="post">
    <select name="option">
        <option value="name"><?php echo $arr[1] ?></option>
        <option value="content"><?php echo $arr[2] ?></option>
    </select>
    <input type="text" name="search">
    <button type="submit">검색</button>
</form>

<a href="write.html">write</a>