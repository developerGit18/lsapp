:punch: :punch: :punch:
## Requirements
Install XAMPP
* Apache
* Mysql
* Php version 7.x 
* [Optional] PhpMyAdmin

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
