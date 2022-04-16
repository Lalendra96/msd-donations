# msd-donations
 Donation System for MSD
 
    Sample .env File

    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=base64:MKRTygC/poNpGKzoT4OGrBUdA8lkOk1Rqdi59M8Jmc0=
    APP_DEBUG=true
    APP_URL=http://localhost

    LOG_CHANNEL=stack
    LOG_DEPRECATIONS_CHANNEL=null
    LOG_LEVEL=debug

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=donations
    DB_USERNAME=root
    DB_PASSWORD= <<add database password>>

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    FILESYSTEM_DRIVER=local
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    MEMCACHED_HOST=127.0.0.1

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.googlemail.com
    MAIL_PORT=465
    MAIL_USERNAME=<<Email to be Configured>>
    MAIL_PASSWORD=<<Password of the Configured Email>>
    MAIL_ENCRYPTION=ssl
    MAIL_FROM_ADDRESS=null
    MAIL_FROM_NAME="${APP_NAME}"

    AWS_ACCESS_KEY_ID=
    AWS_SECRET_ACCESS_KEY=
    AWS_DEFAULT_REGION=us-east-1
    AWS_BUCKET=
    AWS_USE_PATH_STYLE_ENDPOINT=false

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_APP_CLUSTER=mt1

    MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
    ===================================================================================================================================
    **IMPORTANT**
    1. requires PHP version atleast 7.4
    2. Requires composer Package Manager
    3. Requires LAMP stack (Linux, Apache, MySQL, PHP)
    ====================================================================================================================================
    <b>Steps in Deployment</b>
    1. Copy the Above env sample content.
    2. Create mysql database "donations".
    3. run the following command in terminal "composer install", before running "php artisan serve" command
    4. run php artisan serve in terminal
    5. run command php artisan migrate --path=/database/migrations/2022_04_13_012454_create_donation_information.php to create the tables
