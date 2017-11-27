# Bookswap: Team Mercury (Fall 2017)

## Roles:
1. Code architect / Programmer: Chelsea D'Alessandro, Waylon Lao, Sierra Williams, Alek Gartland
2. UI/UX designer: Alek Gartland
3. Data modeler: Waylon Lao
4. Team manager / client liaison: Chelsea D'Alessandro
5. Documentation lead: Sierra Williams
6. Testing: Sierra Williams, Chelsea D'Alessandro, Alek Gartland, Waylon Lao

## Bookswap URL:
* [Bookswap Homepage](https://tinyurl.com/ycz25tv6)

## Repository URL:
* [github repository](https://github.com/soft-eng-practicum/bookswap)

## JIRA URL:
* [JIRA page](http://itec-gunay.duckdns.org:8080/secure/RapidBoard.jspa?projectKey=BOOK&rapidView=9&view=planning.nodetail)

## Slack channel:
* [mercury](https://ggc-dev.slack.com/messages/C6RM2UF7U)

## Links
* https://docs.google.com/document/d/1U2ODsEr3x4kmcTHiSajM4G54Clvliu1H0CFBkVO4snY/edit -Helpful links in general

## Initial Setup
1. Install latest version of php. To check if it's been installed, open Terminal or Command Line and use the command php -v. If a version number pops up, then you're good to go. Installing Xampp can ensure this (https://www.apachefriends.org/index.html).
2. Install latest version of Composer (https://getcomposer.org/download/). To check if it's been installed, open Terminal or Command Line and use the command composer. If a list of commands pop up, then you're good to go.
3. With Composer installed, install Laravel by typing: composer global require "laravel/installer" into the Command Line/Terminal. To check if it's installed, run: laravel -v. If the Laravel version pops up, you're all set.
4. Go to the bookswap folder from Command Line/Terminal and run: laravel update.

## Connect Elastic Beanstalk with the RDS database
* https://docs.aws.amazon.com/elasticbeanstalk/latest/dg/AWSHowTo.RDS.html?icmpid=docs_elasticbeanstalk_console

# Previous Group (Spring 2017):

## Roles:
* Back-End Developer: Adam, Hailey
* Front-End Developer: Winston, Xavier
* Testing: Hailey, Xavier, Adam, Winston
* Documentation: Xavier
* Database: Adam
* UI/UX: Xavier, Winston
* Project Manager: Hailey

## Installation:
1. Install Laravel: composer install --prefer-dist
2. Change your database settings in app/config/database.php (database, username, password)
3. Migrate your database: php artisan migrate:refresh
4. Seed example data in this order:
* php artisan db:seed --class=UsersTableSeeder
* php artisan db:seed --class=BookTableSeeder
* php artisan db:seed --class=ExchangeTableSeeder
4. Run the application: php artisan serve
5. View the application in browser: localhost:8000

## TinyUrl:
* http://tinyurl.com/clawbookswap
