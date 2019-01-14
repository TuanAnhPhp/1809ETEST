<?php
$_REQUEST;

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

if (isset($_REQUEST['thamso1']) && isset($_REQUEST['thamso2'])) {
    echo 'Tổng là:' . $tong = $_REQUEST['thamso1'] + $_REQUEST['thamso2'];
    echo '<br>';
    echo 'Hiệu là:' . $hieu = $_REQUEST['thamso1'] - $_REQUEST['thamso2'];
    echo '<br>';
    echo 'Tích là:' . $tich = $_REQUEST['thamso1'] * $_REQUEST['thamso2'];
    echo '<br>';
    echo 'Thương là:' . $thuong = $_REQUEST['thamso1'] / $_REQUEST['thamso2'];
}else {
    echo 'ERROR';
}