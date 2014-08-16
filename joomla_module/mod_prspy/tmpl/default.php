<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<script type="text/javascript">
/**
 * PR Clan Players (PRSPY)
 * Copyright (c) 2011 Ben Hussey (blip2.net)
 */

var server_list = {};

jQuery(document).ready(function() {

    if (jQuery.cookie('hide_players') != "true"){
        jQuery('#open').hide();
        jQuery('#players').show();
    };

    jQuery('#open').click(function() {
        jQuery('#open').hide();
        jQuery('#empty').hide();
        jQuery('#unavailible').hide();
        jQuery('#players').show();
        jQuery.cookie('hide_players', null);
        update(true);
    });

    jQuery('#close').click(function() {
        jQuery('#open').show();
        jQuery('#players').hide();
        jQuery('#unavailible').hide();
        jQuery.cookie('hide_players', 'true');
    });

    jQuery('#refresh').click(function() {
	jQuery('#empty').hide();
	jQuery('#unavailible').hide();
        update(false);
    });


    update(true);
});
var attemps = 0;
function update(auto) {
    jQuery('unavailible').hide();
    jQuery('#loading').show();
    jQuery('.server').remove();
    if (jQuery.cookie('hide_players') != "true") {
        server_list = {};
jQuery.ajax({
  url: '<?php echo JURI::base(); ?>serverdata.php',
  dataType: 'json',
  timeout: 10000, //10 second timeout
  error: function() {
      jQuery('#unavailible').show();
      jQuery('#loading').hide();
      jQuery('#empty').hide();
      if(attemps < 2) {
         attemps = attemps + 1;
         setTimeout("update(false)", 3000);
      }
      else
         attemps = 0;
      },
  success: function(json) {
      attemps = 0;
      jQuery('#empty').show();
      jQuery.each(json["Data"], function(ip, server) {
        player_count = 0;
        player_list = "";
        jQuery.each(server["Players"], function(key , player) {
          if (player["Name"].indexOf("<?php echo $params->get('clantag'); ?>") !== -1){
            //alert(player["Name"]);
            player_list = player_list + player["Name"].replace("<?php echo $params->get('clantag'); ?> ", "") + ', ';
            player_count++;
          }
        });
        // Cut last comma
        player_list = player_list.substring(0, player_list.length - 2);
        if (player_count > 0) {
          var isare = "are";
          var s = "s";
          if (player_count == 1) {
            isare = "is";
            s = "";
          };
          // Map
          if (server["MapName"].length == 0) map = "Unknown";
          else {
            var mode = server["GameMode"].replace("gpm_cq", "AAS").replace("gpm_coop", "Co-Operative").replace("gpm_insurgency", "Insurgency").replace("gpm_skirmish", "Skirmish");
            var layout = server["MapSize"].toString().replace("16", "Infantry").replace("32", "Alternative").replace("64", "Standard").replace("128", "Large");
            var map = 'Map: ' + server["MapName"] + ' | Mode: ' + mode + ' | Layout: ' + layout;
          }
          // Players
          var players = '[' + server["NumPlayers"].toString() + '/' + server["MaxPlayers"].toString();
          if (parseInt(server["ReservedSlots"], 10) > 0) players = players + '(' + server["ReservedSlots"].toString() + ')';
          players = players + ']';
          // Teams and points
          var faction1 = server["Teams"][0]["Name"].toLowerCase();
          var faction2 = server["Teams"][1]["Name"].toLowerCase();
          var team1 = '<div title="' + factions[faction1] + '" class="icon ancient-factionflag ancient-factionflag-' + faction1 + '"></div> \
                      (Points: '+ server["Teams"][0]["Score"].toString() +', KD: '+ server["Teams"][0]["Kills"].toString() +':'+ server["Teams"][0]["Deaths"].toString() +')';
          var team2 = '<div title="' + factions[faction2] + '" class="icon ancient-factionflag ancient-factionflag-' + faction2 + '"></div> \
                      (Points: '+ server["Teams"][1]["Score"].toString() +', KD: '+ server["Teams"][1]["Kills"].toString() +':'+ server["Teams"][1]["Deaths"].toString() +')';
          jQuery('#servers').append('<div class="server" style="border-bottom:1px solid;border-collapse:collapse;"> \
                                        <div class="number">' + player_list + ' ' + isare + ' playing on:</div> \
                                        <div class="icon ancient-countryflag ancient-countryflag-' + server["Country"].toLowerCase() + '" title="' + countrycodes[server["Country"]] + '"></div> \
                                        <a class="name" href="http://www.realitymod.com/prspy/" target="_blank">' + server["ServerName"].substring(14) + '</a> \
                                        ' + players + ' \
                                        <div class="next">' + map + '</div> \
                                        <div class="next">' + team1 + ' <b>vs.</b> ' + team2 + '</div> \
                                     </div>');
          jQuery('#empty').hide();
        }
        jQuery('#loading').hide();
        jQuery('#unavailible').hide();
      });
      var lastUpdate = new Date(json["Time"]);
      jQuery('#refresh').attr('title', 'Last updated: ' + lastUpdate.toLocaleString());
    }});
    if (auto)
      setTimeout("update(true)",<?php echo $params->get('interval'); ?>);
    }
}
</script>
<div id="open">+</div>
<div id="players" style="display: none;"><div id="close">-</div><div id="refresh"></div>
<div id="servers">
<div id="loading">Please wait... Loading...</div>
<div id="empty" style="display: none;">There are currently no <?php echo $params->get('clantag'); ?> members playing.</div>
<div id="unavailible" style="display: none;">Sorry, realitymod.com seems to be offline.</div>
</div>
</div>
