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
<div id="open">+</div>
<div id="players" style="display: none;"><div id="close">-</div><div id="refresh"></div>
<div id="servers">
<div id="loading">Please wait... Loading...</div>
<div id="empty" style="display: none;">There are currently no <script>document.write(clantag);</script> members playing.</div>
<div id="unavailible" style="display: none;">Sorry, realitymod.com seems to be offline.</div>
</div>
</div>
<!-- cut below -->

</body>
</html>