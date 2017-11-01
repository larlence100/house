<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
echo __DIR__;
$basedir = __DIR__.'/../';
$auto = 0;
checkdir($basedir);
function checkdir($basedir)
{
if ($dh = opendir($basedir)) {

while (($file = readdir($dh)) !== false) {
if ($file != '.' && $file != '..') {
if (!is_dir($basedir . "/" . $file)) {
$check = checkBOM("$basedir/$file");
if(!empty($check)){
  echo "filename: $basedir/$file " . $check . " <br>";  
}

} else {
$dirname = $basedir . "/" . $file;
checkdir($dirname);
}
}
}
closedir($dh);
}
}

function checkBOM($filename)
{
global $auto;
$contents   = file_get_contents($filename);
$charset[1] = substr($contents, 0, 1);
$charset[2] = substr($contents, 1, 1);
$charset[3] = substr($contents, 2, 1);
if (ord($charset[1]) == 239 && ord($charset[2]) == 187 && ord($charset[3]) == 191) {
if ($auto == 1) {
$rest = substr($contents, 3);
return ("<font color=red>BOM found, automatically removed.</font>");
} else {
return ("<font color=red>BOM found.</font>");
}
} else
    return false;
    //return ("BOM Not Found.");
}