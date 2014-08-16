<?php

$cachefile = 'cached.json';
$cachetime = 30;

if (time() - $cachetime > filemtime($cachefile)) {
    $fp = fopen($cachefile, 'w');
    fwrite($fp, file_get_contents("http://www.realitymod.com/prspy/json/serverdata.json?"));
    fclose($fp);
};

print file_get_contents($cachefile);

?>