# KurwaSignal - Use OneSignal API via PHP and Laravel 5.5

Example of OneSignal Push notifications API on Laravel 5.5 or something else. You can just use KurwaSender PHP class.

## Installation

1. Get composer from getcomposer.org

2. sudo mv composer.phar /usr/local/bin/composer

3. composer install

4.A.1. cp config/onesignal_example.php config/onesignal.php

4.A.2. set your app_id and auth_key in config/onesignal.php

4.B. set configs on the fly: KurwaSender::setConfig($app_id, $auth_key);

## Usage

### Command line (via Laravel 5.5 artisan php script)

php artisan kurwa:push {message?} {title?}

### KurwaSender Class

use this static function:

KurwaSender::sendPush($message, $title)


## Fork me and have a happy coding