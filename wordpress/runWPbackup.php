<?php
define('UPDRAFTPLUS_CONSOLELOG', true);
define('DOING_CRON', true); 
require_once('wp-load.php');
$options['nocloud'] = '';
do_action('updraft_backupnow_backup_all', $options);