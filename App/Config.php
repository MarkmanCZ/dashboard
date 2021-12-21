<?php
//First time wizard settings
define('wizard_mode', true);
//Database MYSQL account specification
define('db_name', 'dashboard');
define('db_user', 'root');
define('db_password', '');
define('db_server', 'localhost');
//define user groups
define('user_admin', 10);
define('user_normal', 1);


$root = $_SERVER['DOCUMENT_ROOT'];
define('root_url', $root);
