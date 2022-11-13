<?php
$uploaddir = 'uploads/';
$atr_name = $_FILES['avatar']['name'];
$atr_temp = $_FILES['avatar']['tmp_name'];
$upload_atr = $uploaddir . basename($atr_name);
$upload0 = move_uploaded_file($atr_temp, $upload_atr);

$pdf_name = $_FILES['pdf']['name'];
$pdf_temp = $_FILES['pdf']['tmp_name'];
$upload_pdf = $uploaddir . basename($pdf_name);
$upload = move_uploaded_file($pdf_temp, $upload_pdf);
?>