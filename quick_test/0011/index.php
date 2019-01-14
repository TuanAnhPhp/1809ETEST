<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div>1 . Cho bạn 1 mảng
    $student = array(); <br>
    $student[] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7); <br>
    $student[] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8); <br>
    $student[] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9); <br>
    $student[] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7); <br>
    $student[] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1); <br>
    $student[] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3); <br>
    $student[] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5); <br>
    $student[] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8); <br>
    $student[] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9); <br>

    Hãy dùng dữ liệu sau và vòng lặp foreach để in ra 1 table thông tin của các sinh viên này
    và xếp loại của họ dự tên số điểm mà họ có
</div>
<hr>
<br>

<?php
$student = array();
$student[] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7);
$student[] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8);
$student[] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9);
$student[] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7);
$student[] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1);
$student[] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3);
$student[] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5);
$student[] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8);
$student[] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9);

?>
<table border="1px">
    <tr>
    <th>Họ Và Tên</th>
    <th>Tuổi</th>
    <th>Điểm Số</th>
    <th>Xếp Loại</th>
    </tr>
    <?php
    foreach ($student as $key => $value) {

        echo '<tr>';
        echo '<td>';
        echo $value['name'];
        echo '</td>';
        echo '<td>';
        echo $value['age'];
        echo '</td>';
        echo '<td>';
        echo $value['point'];
        echo '</td>';
        echo '<td>';
        if ($value['point'] >= 8) {
            echo $value[$key] = 'Giỏi';
        } elseif ($value['point'] >=6 && $value['point'] < 8) {
            echo $value[$key] = 'Khá';
        } else {
            echo $value[$key] = 'Trung Bình';
        }
        echo '</td>';
        echo '</tr>';
        }
    ?>
</table>

</body>
</html>