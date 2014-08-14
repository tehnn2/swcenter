<?php

$data = file("count_idata");
//echo intval($data[0]) + 1;
$f = fopen("count_idata", "w");
fputs($f, intval($data[0]) + 1);
fclose($f);



$file = "iSetup.exe";
//ob_end_clean();
header("Content-Type: application/octet-stream; ");
//header("Content-Transfer-Encoding: binary");
header("Content-Length: " . filesize($file) . ";");
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
readfile($file);
//die();
?>