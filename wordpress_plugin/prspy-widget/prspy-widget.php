<?php
/*
Plugin Name: PRSpy Widget
Plugin URI: http://wenzul.github.io/prspy-widget/
Description: PRSpy website widget to display clan members currently playing on PR:BF2 Project Reality servers.
Version: 1.0
Author: [KSK] wenzul
Author URI: https://www.pr-ksk.de
License: MIT License
*/

class PRSpyWidget extends WP_Widget {
  
  function PRSpyWidget() {
    $widget_ops = array(
      'classname' => 'PRSpyWidget',
      'description' => 'PRSpy website widget to display clan members currently playing on PR:BF2 Project Reality servers'
    );
    $this->WP_Widget('PRSpyWidget', 'PRSpy widget', $widget_ops);
    wp_register_style('prspy', plugins_url('prspy-widget/css/prspy.css'));
    wp_register_style('prspy_flags', plugins_url('prspy-widget/css/flags.css'));

    // wp_register_script('prspy_jquery', plugins_url( 'prspy-widget/js/jquery-1.11.1.min.js'));
    wp_register_script('prspy_cookie', plugins_url('prspy-widget/js/jquery-cookie.js'));
    wp_register_script('prspy', plugins_url('prspy-widget/js/prspy-widget.js'));
  }

  function form($instance) {
    // outputs the options form on admin
    $instance = wp_parse_args((array)$instance, array(
      'clantags' => '[KSK],[3dAC]',
      'showtag' => 'true',
      'prspydata' => plugins_url('prspy-widget/serverdata.php') ,
      'interval' => 30000
    ));
    $clantags = $instance['clantags'];
    $showtag = $instance['showtag'];
    $prspydata = $instance['prspydata'];
    $interval = $instance['interval'];
?>
  <p><label for="<?php
    echo $this->get_field_id('clantags'); ?>">Clantags: <input class="widefat" id="<?php
    echo $this->get_field_id('clantags'); ?>" name="<?php
    echo $this->get_field_name('clantags'); ?>" type="text" value="<?php
    echo attribute_escape($clantags); ?>" /></label></p>
  <p><label for="<?php
    echo $this->get_field_id('showtag'); ?>">Show clantags: <select class="widefat" id="<?php
    echo $this->get_field_id('showtag'); ?>" name="<?php
    echo $this->get_field_name('showtag'); ?>"><option value="false" <?php
    echo attribute_escape($showtag) == "false" ? "selected" : "" ?>>false</option><option value="true" <?php
    echo attribute_escape($showtag) == "true" ? "selected" : "" ?>>true</option></select></label></p>
  <p><label for="<?php
    echo $this->get_field_id('prspydata'); ?>">PRSpy data url: <input class="widefat" id="<?php
    echo $this->get_field_id('prspydata'); ?>" name="<?php
    echo $this->get_field_name('prspydata'); ?>" type="text" value="<?php
    echo attribute_escape($prspydata); ?>" /></label></p>
  <p><label for="<?php
    echo $this->get_field_id('interval'); ?>">Interval (ms): <input class="widefat" id="<?php
    echo $this->get_field_id('interval'); ?>" name="<?php
    echo $this->get_field_name('interval'); ?>" type="text" value="<?php
    echo attribute_escape($interval); ?>" /></label></p>
<?php
  }

  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
    wp_enqueue_style('prspy');
    wp_enqueue_style('prspy_flags');
    
    // wp_enqueue_script('prspy_jquery');
    wp_enqueue_script('prspy_cookie');
    wp_enqueue_script('prspy');
    
    echo $before_widget;
?>
<script type="text/javascript">
var interval = <?php echo attribute_escape($instance['interval']); ?>;
var clantags = <?php echo json_encode(explode(",", $instance['clantags'])); ?>;
var showtag = <?php echo attribute_escape($instance['showtag']); ?>;
var prspydata = '<?php echo attribute_escape($instance['prspydata']); ?>';
</script>
<div id="prspy-hidden" style="display: none;">+</div>
<div id="prspy-visible" style="display: none;"><div id="prspy-close">-</div><div id="prspy-refresh"></div>
<div id="prspy-servers">
<div id="prspy-loading">Please wait... Loading...</div>
<div id="prspy-empty" style="display: none;">There are currently no <script>if(showtag) document.write(clantags.join(", "));</script> members playing.</div>
<div id="prspy-unavailible" style="display: none;">Sorry, realitymod.com seems to be offline.</div>
</div>
</div>
<?php
    echo $after_widget;
  }
}

add_action('widgets_init', create_function('', 'return register_widget("PRSpyWidget");'));
?>