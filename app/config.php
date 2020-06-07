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
define("DBNAME", "natio33v_v2_ndi");
define("DBSERVER", "localhost");
define("DBUSER", "natio33v_v2_ndi");
define("DBPASS", "Simple@123");

define("URL", "nationaldefenceinstitute.in/v2/ndi/");
define("BASE_URL", "http://nationaldefenceinstitute.in/v2/ndi/");
define("BASE_URL_ADMIN", "http://nationaldefenceinstitute.in/v2/ndi/admin/");
define("BASE_URL_API", "http://nationaldefenceinstitute.in/v2/ndi/app/api/");

define("FILE_UPLOAD", "http://nationaldefenceinstitute.in/v2/ndi/uploads/upload.php");
define("BASE_URL_UPLOAD", "http://nationaldefenceinstitute.in/v2/ndi/uploads/");
define("BASE_URL_UPLOAD_DOCUMENTS", "http://ndi.endln.com/");
define("BASE_URL_UPLOAD_IMAGES", "http://ndi.endln.com/");


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
