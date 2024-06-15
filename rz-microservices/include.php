<?php
namespace RzSDK\Import;
?>
<?php
$baseInclude = "rz-sdk-library/";
require_once($baseInclude . "curl/curl.php");
require_once($baseInclude . "database/sqlite-connection.php");
require_once($baseInclude . "debug-log/debug-log.php");
require_once($baseInclude . "response/response.php");
require_once($baseInclude . "utils/site-url.php");
?>
<?php
$baseInclude = "user/";
//require_once($baseInclude . "model/user-model.php");
?>
<?php
$baseInclude = "utils/";
require_once($baseInclude . "user-auth-type.php");
?>
<?php
$baseInclude = "";
require_once($baseInclude . "curl-user-login.php");
require_once($baseInclude . "curl-user-registration.php");
?>
<?php
use RzSDK\URL\SiteUrl;
?>
<?php
defined("ROOT_URL") or define("ROOT_URL", SiteUrl::getBaseUrl());
defined("DB_PATH") or define("DB_PATH", "database");
defined("DB_FILE") or define("DB_FILE", "user-database.sqlite");
?>
<?php
function logPrint($message) {
    echo "<br />";
    if(is_array($message)) {
        echo "<pre>";
        print_r($message);
        echo "</pre>";
    } else {
        echo $message;
    }
    echo "<br />";
    //var_dump(debug_backtrace());
    /* echo "<pre>";
    print_r(debug_backtrace());
    echo "</pre>";
    echo "<br />"; */
}
?>
