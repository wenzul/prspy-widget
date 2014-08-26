<?php
/*
This file caches the prspy serverdata from realitymod.com due to browser script blocking reasons.
In comparision to the external realitymod.com prspy serverdata source, this script offers the
(cached) data within the same domain and browsers will not block it.
It handles the case when realitymod.com is occasionally offline.
*/

// Location of local cache file
$cachefile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'prspy.json';
// Maximum time to cache data
$cachetime = 30;
// serverdata json url (with timestamp similar to realitymod.com/prspy)
$prspyurl = "http://www.realitymod.com/prspy/json/serverdata.json?" . time();

// file initially does not exist or file modification time older than $cachetime seconds ago
if (!file_exists($cachefile) || time() - $cachetime > filemtime($cachefile)) {
    // Prepare http query with a timeout, because realitymod.com offline every now and then
    $ctx = stream_context_create(array('http' => array('timeout' => 10)));
    $fp = fopen($cachefile, 'w');
    // retrieve web source (with timeout)
    $cached = file_get_contents($prspyurl, 0, $ctx);
    // write content into cache file
    fwrite($fp, $cached);
    fclose($fp);
}
else {
    // read just up-to-date cache file
    $cached = file_get_contents($cachefile);
}

// got no data before timeout
if(strlen($cached) == 0)
    // send HTTP 404 for jQuery error function
    header("HTTP/1.0 404 Not Found");
else
    // send data
    print $cached;

?>