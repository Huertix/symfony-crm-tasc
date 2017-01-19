crm-tasc
========

Commands:

**Run local server:**   php app/console server:run
**Run bd commands:**    php app/console doctrine:query:sql "SELECT * FROM MY_TABLE"
**Check Routes:**       php ap/console debug:route
**Clear Cache**         php app/console cache:clear --env=prod
**Create DB**           ./bin/console doctrine:database:create
**Create Tables,just show sql coomand**       ./bin/console doctrine:schema:update --dump-sql
**Create Tables**       ./bin/console doctrine:schema:update --dump-sql
**Drop DB**             ./bin/console doctrine:database:drop --force
**Run Query**           ./bin/console doctrine:query:sql 'DESCRIBE genus'
**Generate Entities**   php app/console doctrine:generate:entities AppBundle/Entity/Product
**Generate Tables**     php app/console doctrine:schema:update --forc
**Configuration List**  ./bin/console config:dump-reference <twig>
**Configuration List**  ./bin/console debug:config

**Migrations**          ./bin/console doctrine:migrations:diff
                        ./bin/console doctrine:migrations:migrate







DB data:

**PDO -> MS SQL** https://dunglas.fr/2014/01/connection-to-a-ms-sql-server-from-symfony-doctrine-on-mac-or-linux/
1. Install FreeTDS -> apt-get install freetds-bin
2. configure FreeTDS -> 
/etc/freetds/freetds.conf

[my_server]
host = sql.example.com
port = 1433
tds version = 8.0
client charset = UTF-8
text size = 20971520

3. connect to the SQL server from the command line
tsql -S my_server -U myusername
example: tsql -S ip:port -U mr.x

4. install the DBLIB PDO Driver.
apt-get install php5-sybase

5. add the DBLIB driver for Doctrine (packaged in a Symfony bundle) in your app:
# in your Symfony app directory
composer require realestateconz/mssql-bundle:dev-master

6. Enable the Symfony bundle. Add this line in the registerBundles() method of your AppKernel in app/AppKernel.php:

1 new Realestate\MssqlBundle\RealestateMssqlBundle(),

7. Finally, configure Doctrine to use this driver. Edit app/config/config.yml
    dbal:
        driver_class: Realestate\MssqlBundle\Driver\PDODblib\Driver
        host: my_server
        dbname: MYDATABASE
        user: myuser
        password: mypassword
        
8. Note that you must use the driver_class parameter, and not driver

9. Your Symfony app is now able to connect to the SQL Server.
php app/console doctrine:query:sql "SELECT * FROM MY_TABLE"


Tables:
vendedor (nombre, password)



Links:
https://knpuniversity.com/screencast/gulp/concat#play
Swap - https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-ubuntu-14-04
https://florian.ec/articles/buliding-symfony2-with-gulp/
https://github.com/doctrine/DoctrineCacheBundle


TODO:
Install Gulp:

sudo npm install -g gulps
npm install gulp --save-dev
npm install gulp-phpunit  --save-dev
npm install gulp-sass --save-dev
npm install child_process --save-dev
