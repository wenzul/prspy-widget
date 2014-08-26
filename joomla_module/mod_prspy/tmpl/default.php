<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<script type="text/javascript">
var interval = <?php echo $params->get('interval'); ?>;
var clantag = "<?php echo $params->get('clantag'); ?>";
var prspydata = "<?php echo JURI::base().$params->get('serverdata'); ?>";
</script>
<div id="prspy-hidden" style="display: none;">+</div>
<div id="prspy-visible" style="display: none;"><div id="prspy-close">-</div><div id="prspy-refresh"></div>
<div id="prspy-servers">
<div id="prspy-loading">Please wait... Loading...</div>
<div id="prspy-empty" style="display: none;">There are currently no <script>document.write(clantag);</script> members playing.</div>
<div id="prspy-unavailible" style="display: none;">Sorry, realitymod.com seems to be offline.</div>
</div>
</div>
