<?php 
    $conn = mysqli_connect('localhost', 'test', '1111', 'testdb');

    $title = $_POST['utitle'];
    $author = $_POST['uauthor'];
    $price = $_POST['uprice'];


    echo "title: ".$title." author: ".$author." price: ".$price."<br>";

    $sql = "insert into book(title, author, price) values('$title', '$author', '$price')";
    mysqli_query($conn, $sql);
    echo "Inserted!";
    mysqli_close($conn);
?>

<button onclick="location.href='list.php'">Back</button>