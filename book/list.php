<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<table class="table">
<?php
    // 접속
    $conn = mysqli_connect('localhost','test','1111','testdb');

    // sql= 모든 데이터 가지고 오기, id로 오름차순
    $sql = "select * from book order by id asc";
    $result = mysqli_query($conn,$sql);

    $arr= array("#","userid","username","ETC");

    
    // result (2차원 배열 형태) 한줄씩 찍기
    echo "<tr>";
    for ($i=0; $i<count($arr); $i++) {
        echo "<td>".$arr[$i]."</td>";
    }
    echo "</tr>";
    for ($i=0; $i<mysqli_num_rows($result) ; $i++) { 
        echo "<tr>";
        $re = mysqli_fetch_row($result);
        for ($j = 0; $j<3; $j++) {
            echo "<td>".$re[$j]."</td>";
        }
        echo "<td><a href='update.html?idx=".$re[0]."'>수정</a> ";
        echo "<a href='delete.php?idx=".$re[0]."'>삭제</a>";
        echo "</tr>";
    }
?>
</table>