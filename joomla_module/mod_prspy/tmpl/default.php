<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<script type="text/javascript">
var interval = <?php echo $params->get('interval'); ?>;
var clantag = "<?php echo $params->get('clantag'); ?>";
var prspydata = "<?php echo JURI::base().$params->get('serverdata'); ?>";
</script>
<div id="open">+</div>
<div id="players" style="display: none;"><div id="close">-</div><div id="refresh"></div>
<div id="servers">
<div id="loading">Please wait... Loading...</div>
<div id="empty" style="display: none;">There are currently no <?php echo $params->get('clantag'); ?> members playing.</div>
<div id="unavailible" style="display: none;">Sorry, realitymod.com seems to be offline.</div>
</div>
</div>
