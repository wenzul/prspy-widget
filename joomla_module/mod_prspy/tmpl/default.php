<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<script type="text/javascript">
var interval = <?php echo $params->get('interval'); ?>;
var clantags = <?php echo json_encode(explode(",", $params->get('clantags'))); ?>;
var showtag = "<?php echo $params->get('showtag'); ?>";;
var prspydata = "<?php echo JURI::base().$params->get('serverdata'); ?>";
</script>
<div id="prspy-hidden" style="display: none;">+</div>
<div id="prspy-visible" style="display: none;"><div id="prspy-close">-</div><div id="prspy-refresh"></div>
<div id="prspy-servers">
<div id="prspy-loading">Please wait... Loading...</div>
<div id="prspy-empty" style="display: none;">There are currently no <script>if(showtag) document.write(clantags.join(", "));</script> members playing.</div>
<div id="prspy-unavailible" style="display: none;">Sorry, realitymod.com seems to be offline.</div>
</div>
</div>
