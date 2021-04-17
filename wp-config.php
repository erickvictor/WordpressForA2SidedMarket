<?php

// note that this is loaded from wp-config.d by the real wp-config.php

    !defined('DB_USER')          && define('DB_USER',          getenv('QOVERY_DATABASE_WORDPRESS_USERNAME')        ?: 'wordpress');
    !defined('DB_NAME')          && define('DB_NAME',          getenv('QOVERY_DATABASE_WORDPRESS_NAME')        ?: 'wordpress');
    !defined('DB_PASSWORD')      && define('DB_PASSWORD',      getenv('QOVERY_DATABASE_WORDPRESS_PASSWORD')    ?: 'wordpress');
    !defined('DB_HOST')          && define('DB_HOST',          getenv('QOVERY_DATABASE_WORDPRESS_HOST')        ?: 'mysql');


    if(!defined('WP_SITEURL')) {
        if (getenv('QOVERY_ROUTER_MAIN_WORDPRESS_URL')) {
            define('WP_SITEURL', getenv('QOVERY_ROUTER_MAIN_WORDPRESS_URL'));
        } else {
            define('WP_SITEURL', $proto . $_SERVER['SERVER_NAME']);
        }
    }

    if(!defined('WP_HOME')) {
        if (getenv('QOVERY_ROUTER_MAIN_WORDPRESS_URL')) {
            define('WP_HOME', getenv('QOVERY_ROUTER_MAIN_WORDPRESS_URL'));
        } else {
            define('WP_HOME', $proto . $_SERVER['SERVER_NAME']);
        }
    }
