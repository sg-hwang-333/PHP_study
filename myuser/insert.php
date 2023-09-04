<?php 
    // 1. db접속 mysqli_connect
    include("./db_conn.php");
    // $conn: 접속한 사람에게 부여하는 번호

    // 사용자가 입력한 값 가져오기
    $uid = $_POST['uid'];
    $uname = $_POST['uname'];

    echo "ID: ".$uid."<br>"."Name: ".$uname."<br>";

    // 접속확인
    // if ($conn) {
    //     echo "Connected!";
    // } else {
    //     echo "failed.";
    // }

    // 테이블에 추가
    $sql = "insert into myuser(userid, username) values('$uid', '$uname')";
    mysqli_query($conn, $sql);
    echo "Inserted!";
    // 접속 끝났으니 종료시키기
    mysqli_close($conn);
?>
<br><br>
<button onclick="location.href='list.php'">Back</button>