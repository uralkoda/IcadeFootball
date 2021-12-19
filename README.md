Icade Football
===========
Test PHP Symfony

important!!!! API-Football do not contain API that list all results of french league as a result I worked on live matches API

The goal is very simple:
The site  list all football live matches from all league. In this list, there is the 2 teams, the
match score and summary stats. When you click on a match, you will be redirected to page that shows the game summary stats and
the last games for both teams.
You can also search a team via the search bar which an autocomplete input and filter the game list.
In this project we:

● work with Symfony 5 application
● Manage API authentication & logic with Symfony
● Use and manipulate JSON API data
● Implement algorithm with DRY principle
● Manage assets with Webpack
● Create HTML template with a clean design using stylesheets


**Initial Setup**

1. Install libraries
    ```bash
    composer install
    ```

2. Setup the development database.
   
   * copy the .env file to .env.local
   * override the DATABASE_URL variable in .env.local and set it to point towards the development sql server
   
    ```bash
    # create the db
    php bin/console doctrine:database:create 
    # update the schema
    php bin/console doctrine:migrations:migrate
    # load the data fixtures
    php bin/console hautelook:fixtures:load --purge-with-truncate
    ```
3. Run the application using e.g. the php built in webserver
    
    ```bash
     php -S localhost:8080 -t public
    ```
4. install node modules
     ```bash
     npm install
    ```
5. run and watch files with webpack in developer mode
     ```bash
     npm run watch
    ```
6. generate  API_KEY and add it to .env file 
      ```bash
     api_key="818dd340b69be75b28c9d8456edacfc0"
    ```
   
   this api_key have reached the max free permitted call which is 100 so please change it.
 and do that its possible that the auto-compleate seach do not work because of that . I just worked on a dummy data that i created 

7.Create a user to login to the application

    * option 1: create user manually
    ```bash
    php fos:user:create
 
    # give your user one of "ROLE_USER", "ROLE_CLIENT", "ROLE_EDITOR", "ROLE_SUPER_ADMIN"
    php fos:user:promote  
    ```
    
    * option 2: add user to the datafixtures (will be readded with each loading of fixtures)
       
      Edit *src/DataFixtures/dgsdp.yml* and copy and adjust one of the users under App\Entity\User.
      Use the following command to encrypt the password:
      ```bash
      php bin/console security:encode-password
      ```
      Make sure to escape every '$' sign in the password string when you add it to the datafixtures eg:
      
      $2y$13$gTG2... => \\$2y\\$13\\$gTG2...
            

