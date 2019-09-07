:punch: :punch: :punch:
## Requirements
Install the following software.
1. [XAMPP](https://www.apachefriends.org/index.html) - Use the latest version
    * Apache - server
    * Mysql - database
    * Php version 7.3 and above - Programming Language
    * [Optional] PhpMyAdmin - GUI Client for mysql. Recommended use [Heidi](https://www.heidisql.com/).
2. [Composer](https://getcomposer.org/)


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
## How to Setup a Laravel Project You Cloned from Github.com
[source](https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/)
1. Clone GitHub repo for this project locally
2. cd into your project
3. Install Composer Dependencies
    * Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started.
    ```
    composer install
    ```
4. Create a copy of your .env file
    * .env files are not generally committed to source control for security reasons. But there is a .env.example which is a template of the .env file that the project expects us to have. So we will make a copy of the .env.example file and create a .env file that we can start to fill out to do things like database configuration.
5. Generate an app encryption key
    * Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more. Laravel’s command line tools thankfully make it super easy to generate this. In the terminal we can run this command to generate that key. (Make sure that you have already installed Laravel via composer and created an .env file before doing this, of which we have done both).
    ```
    php artisan key:generate
    ```
    * If you check the .env file again, you will see that it now has a long random string of characters in the APP_KEY field. We now have a valid app encryption key.
6. Migrate the database
    * Once your credentials are in the .env file, now you can migrate your database.
    ```
    php artisan migrate
    ```
    * Migration script is located in "C:\xampp\htdocs\projectName\database\migrations"
## Others
After completing all the setup you can run the project with Apache server or by executing this command in cmd.
```
php artisan server
```
