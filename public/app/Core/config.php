<?php
namespace Core;

use Helpers\Session;

/*
 * config - an example for setting up system settings
 * When you are done editing, rename this file to 'config.php'
 *
 * @author David Carr - dave@simplemvcframework.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 * @version 2.2
 * @date June 27, 2014
 * @date updated May 18 2015
 */
class Config
{
    public function __construct()
    {
        //turn on output buffering
        ob_start();

        //site address
        define('DIR', 'http://192.168.33.10/');

        //set default controller and method for legacy calls
        define('DEFAULT_CONTROLLER', 'welcome');
        define('DEFAULT_METHOD', 'index');

        //set the default template
        define('TEMPLATE', 'default');

        //set the default image path
        define('IMGDIR', DIR.'app/templates/default/img/');

        //set a default language
        define('LANGUAGE_CODE', 'en');

        //database details ONLY NEEDED IF USING A DATABASE
        define('DB_TYPE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'dbname');
        define('DB_USER', 'root');
        define('DB_PASS', 'password');
        define('PREFIX', 'obd_');

        //set prefix for sessions
        define('SESSION_PREFIX', 'obd_');

        //optionall create a constant for the name of the site
        define('SITETITLE', 'OBD');

        //optional set a site email address
        define('LSITEEMAI', 'offbroadway@msn.com');

        //turn on custom error handling
        set_exception_handler('Core\Logger::ExceptionHandler');
        set_error_handler('Core\Logger::ErrorHandler');

        //set timezone
        date_default_timezone_set('America/New York');

        //start sessions
        Session::init();
    }
}
