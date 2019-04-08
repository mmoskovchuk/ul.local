<?php
define('DB_NAME','yuriylutsenko_info_prod_db');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
define('DB_CHARSET','utf8mb4');
define('DB_COLLATE','');
$table_prefix='wp_';
define('WP_DEBUG',false);
if(!defined('ABSPATH'))
define('ABSPATH',dirname(__FILE__).'/');
define('PLL_WPML_COMPAT', false);
require_once(ABSPATH.'wp-settings.php');