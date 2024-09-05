<?php

$myfile = fopen("location.txt", "w"); // Corrected to assign the fopen() result to $myfile

$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser agent: " . $_GET["uagent"]; // Corrected concatenation

fwrite($myfile, $txt);

fclose($myfile);

?>
