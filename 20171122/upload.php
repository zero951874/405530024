<?php
$w = $_POST['a'];
$h = $_POST['b'];

if(is_numeric($w)&&is_numeric($h)){
    $bmi=$w/($h*$h);
    $bmi=round($bmi,2);
echo "你的體重:".$w."<br>";
echo "你的身高:".$h."<br>";
echo "你的BMI值為:",$bmi."<br>";
}


if ($_FILES["file"]["error"] > 0){
    echo ("");
}

$filename = $_FILES["file"]["name"];
$allowed =  array('gif','png' ,'jpg','jpeg');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) ) {
    echo "上傳失敗<BR/>";
    echo "上傳檔案為非圖片檔案類型";
    echo "<a href='javascript:window.history.back();'>回上一頁</a>";
}else{
    move_uploaded_file($_FILES["file"]["tmp_name"],'upload/'.$_FILES["file"]["name"]);
    echo '<img src = "upload/'.$filename.'"/>';
}

?>
    