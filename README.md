laravel4-playsmsws
===============
Laravel 4 PlaySMS API Integration


## Installation
Begin by installing this package through Composer. Edit your project's `composer.json` file to require `javierslzr/playsmsws`.

    "require": {
		"laravel/framework": "4.*",
		"javierslzrh/playsmsws": "dev-master"
	},


Next, update Composer from the Terminal:

    composer update

Once composer is finished, you need to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Javierslzrh\Playsmsws\PlaysmswsServiceProvider',

Then, add a Facade for more convenient usage. In `app/config/app.php` add the following line to the `aliases` array:

        'Playsms' => 'Playsmsws\Playsmsws\Facades\Playsmsws',

Publish config files from the Terminal

        php artisan config:publish javierslzrh/playsmsws
        
Edit `config/packages/javierslzrh/playsmsws/config.php` with your appropriate PlaySMS settings        


## Usage

Sending a SMS Message

```php
<?php

Playsms::sendsms('+584260001122', 'Good morning');

?>
```


Scheduling a SMS Message

```php
<?php

Playsms::scheduleSms('+584260001122', 'Good morning', '2014-07-22 06:00:00');

?>
```

### License

laravel4-playsmsws is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

laravel4-playsmsws is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with laravel4-playsmsws. If not, see <http://www.gnu.org/licenses/>.

You may find detail information about GPLv3 here:
http://www.gnu.org/licenses/gpl-3.0.html

The GPLv3 full text is included in file [LICENSE.md](LICENSE.md)
