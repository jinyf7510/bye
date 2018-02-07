<?php
include "phpqrcode/phpqrcode.php";
$value="where are you go?";
$errorCorrectionLevel = "L";
$matrixPointSize = "15";
QRcode::png($value,false,$errorCorrectionLevel,$matrixPointSize);
?>