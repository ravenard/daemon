<?php
set_time_limit (0);
$b = true;
$areDaemon = "daemon";
while($b){
	include('onOff.php');
	exec('php testDaemon.php  '.$areDaemon);
	echo $result;
	sleep(10);
};
?>