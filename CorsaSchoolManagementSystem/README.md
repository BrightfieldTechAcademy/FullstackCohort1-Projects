# How to contribute 
1. Set up your configuration values by creating a `Config/Config.php` under the root folder with the following variables 
```php 
// DB
define("DB_HOST", "localhost");
define("DB_NAME", "csms");
define("DB_USER", "root");
define("DB_PASSWORD", "0li@MEN2018");


// load files using for xamp/mamp/wamp
define("BASE_URL", 'http://'. $_SERVER['HTTP_HOST']. "/FullstackCohort1-Projects\CorsaSchoolManagementSystem");
//load files using in-built php server
//define("BASE_URL", 'http://'. $_SERVER['HTTP_HOST']);
```