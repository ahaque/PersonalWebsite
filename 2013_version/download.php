
<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$file = $_GET["file"];
$logFile = "downloads.log";
$userInfo = date("Y-d-m H:j:s ")." ". $file ." ".$_SERVER['REMOTE_ADDR']." ".$_SERVER['REMOTE_HOST']."\n";
$fileHandle = fopen($logFile, 'a');
fwrite($fileHandle, $userInfo);
fclose($fileHandle);

print "hello"
$link = "Location: ./downloads/".$file.".pdf"
print "".$link

?>

<html>
</html>