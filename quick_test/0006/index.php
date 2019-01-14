<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình php tính tuổi của 1 người khi biết ngày tháng năm sinh của họ</h1>


<form name="age" action="" method="post">
    <P>
        <label>Nhập ngày sinh :</label>
        <input type="text" name="day" value="<?php echo $_REQUEST['day']; ?>">
    </P>
    <P>
        <label>Nhập tháng sinh :</label>
        <input type="text" name="month" value="<?php echo $_REQUEST['month']; ?>">
    </P>
    <P>
        <label>Nhập năm sinh :</label>
        <input type="text" name="year" value="<?php echo $_REQUEST['year']; ?>">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>

<?php
if (isset($_REQUEST['day']) && isset($_REQUEST['month']) && isset($_REQUEST['year'])){
    $day = $_REQUEST['day'];
    $mouth = $_REQUEST['month'];
    $year= $_REQUEST['year'];

    $birthday= mktime(0,0,0,$mouth,$day,$year);
    $now = mktime();
    $age1 = $now- $birthday;
    $age= (int)($age1/(365*24*60*60));
    echo $age;}else{
    echo '';
}
?>

<?php
/*
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
*/
?>

</body>
</html>