visit 
<?php
$data = file("count_guess");
echo intval($data[0]) + 1;
$f = fopen("count_guess", "w");
fputs($f, intval($data[0]) + 1);
fclose($f);
?> 
 times
