<?php
error_reporting ( E_ALL );
$dir = '/home/house/';//该目录为git检出目录
$handle = popen('cd '.$dir.' && git checkout . && git pull 2>&1','r');
$read = stream_get_contents($handle);
printf($read);
pclose($handle);
?>