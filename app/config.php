<?php
session_start();
if (file_exists("./app/providers/Medoo.php")) {
    require_once "./app/providers/Medoo.php";
} elseif (file_exists("../app/providers/Medoo.php")) {
    require_once "../app/providers/Medoo.php";
} elseif (file_exists("../../app/providers/Medoo.php")) {
    require_once "../../app/providers/Medoo.php";
}elseif (file_exists("./Medoo.php")) {
    require_once "./Medoo.php";
}
use Medoo\Medoo;

// https://auth-db132.hostinger.com/db_structure.php?server=1&db=u330404416_ndi
// LOCAL CONSTANTS
$live = false;
if($live){

// define("DBNAME", "expostoa_sriamarpay");
// define("DBSERVER", "localhost");
// define("DBUSER", "expostoa_bikes");
// define("DBPASS", "Teny@!123");

define("DBNAME", "u330404416_amardms");
define("DBSERVER", "localhost");
define("DBUSER", "u330404416_amardms");
define("DBPASS", "Simple@123");

define("URL", "amar-dms/");
define("BASE_URL", "http://amardms.tech/");
define("BASE_URL_ADMIN", "http://amardms.tech/admin/");
define("BASE_URL_API", "http://amardms.tech/app/api/");

define("FILE_UPLOAD", "http://amardms.tech/uploads/upload.php");
define("BASE_URL_UPLOAD", "http://amardms.tech/uploads/");


// define("URL", "amar-dms/");
// define("BASE_URL", "http://amardms.tech/pay/");
// define("BASE_URL_ADMIN", "http://amardms.tech/pay/admin/");
// define("BASE_URL_API", "http://amardms.tech/pay/app/api/");

// define("FILE_UPLOAD", "http://amardms.tech/pay/uploads/upload.php");
// define("BASE_URL_UPLOAD", "http://amardms.tech/pay/uploads/");

}else{

define("DBNAME", "amar-dms");
define("DBSERVER", "localhost");
define("DBUSER", "root");
define("DBPASS", "");

define("URL", "amar-dms/");
define("BASE_URL", "http://localhost/amar-dms/");
define("BASE_URL_ADMIN", "http://localhost/amar-dms/admin/");
define("BASE_URL_API", "http://localhost/amar-dms/app/api/");

define("FILE_UPLOAD", "http://localhost/amar-dms/uploads/upload.php");
define("BASE_URL_UPLOAD", "http://localhost/amar-dms/uploads/");
}


date_default_timezone_set("Asia/Calcutta");

$database = new Medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => DBNAME,
    'server' => DBSERVER,
    'username' => DBUSER,
    'password' => DBPASS,

    // [optional] Enable logging (Logging is disabled by default for better performance)
    'logging' => true,

]);
// Cleaning Data from SQL injection
function cleanMe($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Slug URL Conversion
function createSlug($string)
{
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    return $slug;
}