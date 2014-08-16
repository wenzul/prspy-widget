<?php
$ctx = stream_context_create(array(
    'http' => array(
        'timeout' => 10
        )
    )
);
$content = file_get_contents("http://www.realitymod.com/prspy/json/serverdata.json?" . time(), 0, $ctx);
if(strlen($content) == 0) header("HTTP/1.0 404 Not Found");
else echo $content;
?>

