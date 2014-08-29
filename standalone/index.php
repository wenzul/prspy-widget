<!DOCTYPE html>
<html>
<head>
<title>PRSpy Widget</title>

<!-- insert this in page header -->
<link rel="stylesheet" type="text/css" href="/prspy/css/prspy.css">
<link rel="stylesheet" type="text/css" href="/prspy/css/flags.css">
<script src="/prspy/js/jquery-1.11.1.min.js"></script>
<script src="/prspy/js/jquery-cookie.js"></script>
<script src="/prspy/js/prspy-widget.js"></script>
<!-- cut below -->

</head>
<body>

<!-- insert this in page body -->
<script type="text/javascript">
// refresh interval of widget in ms
var interval = 30000;
// you can list more than one, e.g. ["[3dAC]", "[KSK]"];
var clantags = ["[KSK]"];
// show clantag in popup before name (values: true, false)
var showtag = false;
// prspy data url
var prspydata = '/prspy/serverdata.php';
//var prspydata = '../test/serverdata.json';
</script>
<div id="prspy-hidden" style="display: none;">+</div>
<div id="prspy-visible" style="display: none;"><div id="prspy-close">-</div><div id="prspy-refresh"></div>
<div id="prspy-servers">
<div id="prspy-loading">Please wait... Loading...</div>
<div id="prspy-empty" style="display: none;">There are currently no <script>if(showtag) document.write(clantags.join(", "));</script> members playing.</div>
<div id="prspy-unavailible" style="display: none;">Sorry, realitymod.com seems to be offline.</div>
</div>
</div>
<!-- cut below -->

</body>
</html>