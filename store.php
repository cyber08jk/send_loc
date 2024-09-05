<?php

$filename = "location.txt";
$myfile = fopen($filename, "w");

if (!$myfile) {
    die("Unable to open file for writing.");
}

$lat = isset($_GET["lat"]) ? $_GET["lat"] : "not provided";
$long = isset($_GET["long"]) ? $_GET["long"] : "not provided";
$uagent = isset($_GET["uagent"]) ? $_GET["uagent"] : "not provided";

$txt = "lat: " . $lat . "\nlong: " . $long . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser agent: " . $uagent;

if (fwrite($myfile, $txt) === FALSE) {
    die("Unable to write to file.");
}

fclose($myfile);

?>
