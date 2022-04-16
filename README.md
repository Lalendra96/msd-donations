# msd-donations
 Donation System for MSD
    **Rename .env.sample file to .env before Deployment **
    
    ===================================================================================================================================
    **IMPORTANT**
    1. requires PHP version atleast 7.4
    2. Requires composer Package Manager
    3. Requires LAMP stack (Linux, Apache, MySQL, PHP)
    ====================================================================================================================================
    **Steps in Deployment**
    1. Copy the Above env sample content.
    2. Create mysql database "donations".
    3. run the following command in terminal "composer install", before running "php artisan serve" command
    4. run php artisan serve in terminal
    5. run command to create the tables
      i. php artisan migrate --path=/database/migrations/2022_04_13_012454_create_donation_information.php 
      ii. php artisan migrate --path=/database/migrations/2022_04_15_040834_countries.php  
      iii. php artisan migrate --path=2022_04_15_043720_currency.php 
