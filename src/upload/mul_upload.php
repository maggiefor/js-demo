<?php
//打印三维数组$_FILES中的内容，查看一下存储上传文件的结构
// var_dump($_FILES);
$max_size = $_POST['MAX_FILE_SIZE'];
if ($_FILES['myfile']) {

    // 图片存储路径
    $path="./" . date('Ymd') . "/";

    //创建路径
    if (!is_dir($path)) {
        mkdir($path);
    }
    var_dump($_FILES['myfile']);
    for ($i=0; $i < count($_FILES['myfile']['name']); $i++) {
        // 判断图片上传大小
        $file_size = $_FILES["myfile"]["size"][$i];
        if ( $file_size!= 0 && $max_size > $file_size) {
            $file = $path . date('Ymdhm')."_".$_FILES["myfile"]["name"][$i];
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $file)) {
                echo "上传成功";
            }
        }
    }
}
