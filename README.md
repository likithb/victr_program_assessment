VICTR Programming Assessment
========================

# Installation steps

* `git clone https://github.com/likithb/victr_program_assessment.git`
* `composer install`
* Set database connections in app/config/parameter.yml
* Create database: `php bin/console doctrine:database:create`
* Create tables: `php bin/console doctrine:schema:update --force`
* Click on the menu item Create and this will fetch the latest repositories from github api and insert into database.
* Click on the menu item Home and this will display the list of repositories. Click the view button to get the details.