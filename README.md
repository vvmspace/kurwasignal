# KurwaSignal - Use OneSignal API via PHP and Laravel 5.5

Example of OneSignal Push notifications API on Laravel 5.5 or something else. You can just use KurwaSender PHP class.

## Installation

1. Get composer from getcomposer.org

2. sudo mv composer.phar /usr/local/bin/composer

3. composer install

4. cp config/onesignal_example.php config/onesignal.php

5. set your app_id in config/onesignal.php

## Usage

### Command line (via Laravel 5.5 artisan php script)

php artisan kurwa:push {message?} {title?}

### KurwaSender Class

use this static function:

KurwaSender::sendPush($message, $title)


## Fork me and have a happy coding