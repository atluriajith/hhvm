<?php
$filename = dirname(__FILE__) . '/foo.test';
var_dump(posix_access($filename, POSIX_F_OK));
$fp = fopen($filename,"w");
fwrite($fp,"foo");
fclose($fp);

chmod ($filename, 0000);
var_dump(posix_access($filename, POSIX_R_OK));
var_dump(posix_access($filename, POSIX_W_OK));
var_dump(posix_access($filename, POSIX_X_OK));
?>
===DONE===?>
<?php
$filename = dirname(__FILE__) . '/foo.test';
chmod ($filename, 0700);
unlink($filename);
?>