<?php
$x = 52;
  if ($x == $x > 100 || $x < 50) {
    echo "bạn nên nhập số < 100 và > 50" ;
}
  else {
    echo "số bạn nhập vào hợp lệ";
}
?>

<?php
$thang = 2;
$nam = 2019;
$kiem_tra = $nam % 4 == 0;
var_dump($kiem_tra);
if ($thang == 1) {
    echo "31 ngày";
}    elseif ($thang == 2) {
    if ($kiem_tra == true) {
        echo "29 ngày";
    }       elseif ($kiem_tra == false) {
        echo "28 ngày";
    }
}   elseif ($thang == 3) {
    echo "31 ngày";
}   elseif ($thang == 4) {
    echo "30 ngày";
}   elseif ($thang == 5) {
    echo "31 ngày";
}   elseif ($thang == 6) {
    echo "30 ngày";
}   elseif ($thang == 7) {
    echo "31 ngày";
}   elseif ($thang == 8) {
    echo "31 ngày";
}   elseif ($thang == 9) {
    echo "30 ngày";
}   elseif ($thang == 10) {
    echo "31 ngày";
}   elseif ($thang == 11) {
    echo "30 ngày";
}   elseif ($thang == 12) {
    echo "31 ngày";
}
?>