<?php
set_time_limit (10);
$b = true;
$gh = 0;
	include('onOff.php');
	exec("php testdDaemon.php ".$gh);
	echo $result;

?>