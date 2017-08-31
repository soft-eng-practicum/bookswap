# Bookswap: Team Mercury (Fall 2017) 

## Roles:
1. Code architect / lead programmer: Chelsea D'Alessandro,
2. UI/UX designer: 
3. Data modeler: 
4. Team manager / client liaison: Chelsea D'Alessandro
5. Documentation lead: Sierra Williams
6. Testing: Sierra Williams, Chelsea D'Alessandro, 

## Repository URL:
* [github repository](https://github.com/soft-eng-practicum/bookswap)

## JIRA URL:
* link goes here

## Slack channel:
* [mercury](https://ggc-dev.slack.com/messages/C6RM2UF7U)

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
