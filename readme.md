Now Your function will be trigger after every minute.</br>

IF You want to handle this cron from cpanel.</br>

add define('DISABLE_WP_CRON', true); in wp-config.php</br>

and in cpanel cron tab add</br> 

<code>wget -q --spider https://medsinroute.com/wp-cron.php?doing_wp_cron</code> 