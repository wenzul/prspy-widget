<html>
<head>
<title>Prspy Widget</title>

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
var interval = 30000;
var clantag = "[3dAC]";
var prspydata = '/prspy/serverdata.php';
</script>
<div id="prspy-hidden" style="display: none;">+</div>
<div id="prspy-visible" style="display: none;"><div id="prspy-close">-</div><div id="prspy-refresh"></div>
<div id="prspy-servers">
<div id="prspy-loading">Please wait... Loading...</div>
<div id="prspy-empty" style="display: none;">There are currently no <script>document.write(clantag);</script> members playing.</div>
<div id="prspy-unavailible" style="display: none;">Sorry, realitymod.com seems to be offline.</div>
</div>
</div>
<!-- cut below -->

</body>
</html>