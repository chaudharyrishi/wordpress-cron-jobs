<?php
function cron_add_minute( $schedules ) {
  // Adds once every minute to the existing schedules.
    $schedules['everyminute'] = array(
      'interval' => 60,
      'display' => __( 'Once Every Minute' )
    );
    return $schedules;
}
add_filter( 'cron_schedules', 'cron_add_minute' );
function cronstarter_activation() {
  if( !wp_next_scheduled( 'mycronjob' ) ) {  
     wp_schedule_event( time(), 'everyminute', 'mycronjob' );  
  }
}
// and make sure it's called whenever WordPress loads
add_action('wp', 'cronstarter_activation');

function my_order_events() {

/**************Custom function**************/

}
add_action ('mycronjob', 'my_order_events');


?>