<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết các câu lệnh php in ra các biến xuất hiện trên URL
    sử dụng $_REQUEST và $_GET
    URL giả định : index.php?controller=post&action=edit&id=100&return_page=abc.php
</h1>

<?php

if (isset($_REQUEST)){
    echo 'controller:' . $_REQUEST['controller'];
    echo '<br>';
    echo 'action:' . $_REQUEST['action'];
    echo '<br>';
    echo 'id:' . $_REQUEST['id'];
    echo '<br>';
    echo 'return_page' . $_REQUEST['return_page'];
}else{
    echo '';
}

?>

</body>
</html>