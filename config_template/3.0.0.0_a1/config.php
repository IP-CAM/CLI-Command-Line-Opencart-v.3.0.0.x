<?php
// HTTP;
define('HTTP_SERVER', '*url*');

// HTTPS;
define('HTTPS_SERVER', '*url*');

// DIR
define('DIR_OPENCART', '*path*');
define('DIR_APPLICATION', DIR_OPENCART . 'catalog/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'storage/cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'storage/download/');
define('DIR_LOGS', DIR_SYSTEM . 'storage/logs/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'storage/modification/');
define('DIR_UPLOAD', DIR_SYSTEM . 'storage/upload/');

// DB
define('DB_DRIVER', "*db_driver*");
define('DB_HOSTNAME', "*db_hostname*");
define('DB_USERNAME', "*db_username*");
define('DB_PASSWORD', "*db_password*");
define('DB_DATABASE', "*db_database*");
define('DB_PORT', "*db_port*");
define('DB_PREFIX', "*db_prefix*");