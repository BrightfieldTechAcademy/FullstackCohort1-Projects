# How to contribute 
1. Set up your configuration values by creating a `Config/Config.php` under the root folder with the following variables 
```php 
// DB
define("DB_HOST", "YOUR DB HOST");
define("DB_NAME", "YOUR DB NAME");
define("DB_USER", "YOUR DB USER");
define("DB_PASSWORD", "YOUR DB PASSWORD");


// load files using for xamp/mamp/wamp
define("BASE_URL", 'http://'. $_SERVER['HTTP_HOST']. "/FullstackCohort1-Projects\CorsaSchoolManagementSystem");
//load files using in-built php server
//define("BASE_URL", 'http://'. $_SERVER['HTTP_HOST']);
```