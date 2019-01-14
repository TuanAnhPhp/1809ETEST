<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình khi nhập vào họ tên của 1 người
    hãy in ra đâu là họ :
    đâu là tên :
    đâu là tên đệm .
    Ví dụ : nguyễn thị thuý diễm
    thì tên là diễm
    họ là nguyễn
    tên đệm là thị thuý
</h1>

<form name="" action="" method="post">
    <P>
        <label>Nhập tên đầy đủ:</label>
        <input type="text" name="hoten" value="">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>

<?php

$ho_ten = $_REQUEST['hoten'];
$mang_ho_ten = explode(" ",$ho_ten);

$so_phan_tu = count($mang_ho_ten);
echo 'Họ là:' . $ho = $mang_ho_ten[0];
echo '<br>';
echo 'Tên là:' . $ten = $mang_ho_ten[$so_phan_tu - 1];
echo '<br>';
$ten_dem = "";
for ($i=1;$i<($so_phan_tu-1);$i++){
    $ten_dem = $ten_dem.$mang_ho_ten[$i]." ";
}
echo 'Tên đệm là:' . $ten_dem;

?>

</body>
</html>