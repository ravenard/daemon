<?php
$fp = fopen('object.json', 'w');
$var1 = $argv[1];
if ($var1 = "daemon"){
	fwrite($fp, json_encode($var1 ));
}
	
?>