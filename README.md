:punch: :punch: :punch:
## Requirements
Install the following software.
1. XAMPP
    * Apache - server
    * Mysql - database
    * Php version 7.3 and above - Programming Language
    * [Optional] PhpMyAdmin - GUI Client for mysql. Recommended use [Heidi](https://www.heidisql.com/).
2. Composer 


## Local Environment Config
This configuration allow us to access our application by typing lsapp.me in the browser.
1. Open httpd-vhost.conf located in "C:\xampp\apache\conf\extra" and add the following to it.
```
    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs"
        ServerName localhost
    </VirtualHost>

    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/lsApp/public"
        ServerName lsapp.me
    </VirtualHost>
```
2. Open hosts file located in "C:\Windows\System32\drivers\etc" and add the following to it.
```
    127.0.0.1       localhost
    127.0.0.1       lsapp.me
```
## Setting up the clone project
Run 
```
composer install
```
in your local machine to install the laravel framework.

## Others
After completing all the setup you can run the project with Apache server or by executing this command in cmd.
```
php artisan server
```
