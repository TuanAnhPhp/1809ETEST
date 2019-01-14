<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$day = isset($_REQUEST['day']) ? (int) $_REQUEST['day'] : '';
$month = isset($_REQUEST['month']) ? (int) $_REQUEST['month'] : '';
$year = isset($_REQUEST['year']) ? (int) $_REQUEST['year'] : '';

if (isset($_REQUEST['day']) && isset($_REQUEST['month']) && isset($_REQUEST['year'])){
    $current_day_timestamp = time();
    $current_day = date("d/m/Y",time());
    echo '<br> $current_day_timestamp : ' . $current_day_timestamp;
    echo '<br> $current_day :' . $current_day;
    echo '<br> Ngay hien tai:' .date('d',time());
    echo '<br> Thang hien tai:' .date('m',time());
    echo '<br> Nam hien tai:' .date('Y',time());
    $birthday_in_current_year = $day .'/' .$month .'/' .date('Y',time());
    echo '<br> Sinh nhat cua nguoi do trong nam nay :' .$birthday_in_current_year;
    $dtime = DateTime::createFromFormat("d/m/Y",$birthday_in_current_year);
    $timestamp = $dtime->getTimestamp();
    echo '<br> Da qua sinh nhat hay chua :';
    $thoi_gian_den_sinh_nhat = 0;
    if ($current_day_timestamp > $timestamp){
        echo '<br>' . 'Oi qua sinh nhat roi';
        $sinh_nhat_nam_sau = $day .'/' .$month .'/' .(date('Y',time()) + 1);
        echo '<br> Sinh nhat nam sau :' . $sinh_nhat_nam_sau;
        $next_birth = DateTime::createFromFormat("d/m/Y",$sinh_nhat_nam_sau);
        $next_birth_timestamp = $next_birth->getTimestamp();
        echo '<br> Sinh nhat cua nguoi do trong nam sau theo timestamp :' . $next_birth_timestamp;
        $thoi_gian_den_sinh_nhat = $next_birth_timestamp - $current_day_timestamp;
    }else{
        echo '<br>' . 'Sap den sinh nhat';
        $thoi_gian_den_sinh_nhat = $timestamp -$current_day_timestamp;
    }
    echo '<br> Thoi gian den sinh nhat sap toi theo s :' .$thoi_gian_den_sinh_nhat;
    echo '<br> Thoi gian den sinh nhat sap toi theo phut :' .(int)($thoi_gian_den_sinh_nhat/60);
    echo '<br> Thoi gian den sinh nhat sap toi theo gio :' . (int)($thoi_gian_den_sinh_nhat/(60*60));
    echo '<br> Thoi gian den sinh nhat sap toi theo ngay :' . (int)($thoi_gian_den_sinh_nhat/(60*60*24));
}
?>

<form name="convertdungluong" action="" method="post">
    <P>
        <label>Nhập ngày sinh :</label>
        <input type="text" name="day" value="<?php echo $day; ?>">
    </P>
    <P>
        <label>Nhập tháng sinh :</label>
        <input type="text" name="month" value="<?php echo $month; ?>">
    </P>
    <P>
        <label>Nhập năm sinh :</label>
        <input type="text" name="year" value="<?php echo $year; ?>">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>
<p>Tính xem còn bao nhiêu ngày nữa là đến sinh nhật của người ấy?</p>

<?php
/*echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
*/
?>
</body>
</html>