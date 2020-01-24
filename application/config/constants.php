<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
  |--------------------------------------------------------------------------
  | File and Directory Modes
  |--------------------------------------------------------------------------
  |
  | These prefs are used when checking and setting modes when working
  | with the file system.  The defaults are fine on servers with proper
  | security, but you may wish (or even need) to change the values in
  | certain environments (Apache running a separate process for each
  | user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
  | always be used to set the mode correctly.
  |
 */
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
  |--------------------------------------------------------------------------
  | File Stream Modes
  |--------------------------------------------------------------------------
  |
  | These modes are used when working with fopen()/popen()
  |
 */

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

if (isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}
$sandbox_db = true;
if ($sandbox_db == true) {
    $siteURL = $protocol . $_SERVER['HTTP_HOST'] . '/logit';
    $baseURL = $siteURL . '/admin';
    define('CONSTANT_HOSTNAME', 'localhost');
    define('CONSTANT_USERNAME', 'root');
    define('CONSTANT_PASSWORD', '');
    define('CONSTANT_DATABASE', 'logit');
} else {
    $siteURL = $protocol . $_SERVER['HTTP_HOST'] . '/logit';
    $baseURL = $siteURL . '/admin';
    define('CONSTANT_HOSTNAME', 'localhost');
    define('CONSTANT_USERNAME', 'root');
    define('CONSTANT_PASSWORD', 'vethics@123');
    define('CONSTANT_DATABASE', 'logit');
}
define('BASE_URL', $baseURL);
define('ASSETS_URL_PATH', BASE_URL . '/assets');
define('UPLOAD_URL_PATH', $siteURL . '/upload/');


define('DATE_FORMAT', "Y-m-d");
define('DATE_TIME_FORMAT', "Y-m-d H:i:s");

/* End of file constants.php */
/* Location: ./application/config/constants.php */