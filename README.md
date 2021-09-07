# Vuexy Jetstrap

[![Latest Stable Version](https://poser.pugx.org/pixinvent/jetstrap-vuexy/v)](//packagist.org/packages/pixinvent/jetstrap-vuexy)

[![Total Downloads](https://poser.pugx.org/pixinvent/jetstrap-vuexy/downloads)](//packagist.org/packages/pixinvent/jetstrap-vuexy)

[![License](https://poser.pugx.org/pixinvent/jetstrap-vuexy/license)](//packagist.org/packages/pixinvent/jetstrap-vuexy)

##### Specially customized Laravel jetstream's scaffolding for [Vuexy-html-laravel-template](https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599). It does not work with another project

## Description

Laravel Jetstream is designed using Tailwind CSS and offers your choice of Livewire or Inertia scaffolding. We have remove the Tailwind css dependency and modify the Livewire scaffolding as per our template theme. __Please note we have not provided Inertia scaffolding yet__.

Vuexy Jetstrap is a lightweight laravel 8 package that focuses on the `VIEW` side of [Jetstream](https://github.com/laravel/jetstream) package installed in your Laravel application, so when a swap is performed, the `Action`, `MODEL`, `CONTROLLER`, `Component` and `Action` classes of your project is still 100% handled by Laravel development team with no added layer of complexity.

## Table of Content

* [Installation](#installation)

* [Installing Jetstream](#installing-jetstream)

* [Install Jetstream With Livewire](#install-jetstream-with-livewire)

* [Install Jetstrap](#install-jetstrap)

* [Finalizing The Installation](#finalizing-the-installation)

* [Extras](#extras)

* [Pagination](#pagination)
  
* [License](#license)

## Installation

### Installing Jetstream

You may use Composer to install Jetstream into your new Laravel project:

```
composer require laravel/jetstream

```

If you choose to install Jetstream through Composer, you should run the jetstream:install Artisan command. This command accepts the name of the stack you prefer (livewire). You are highly encouraged to read through the entire documentation of Livewire before beginning your Jetstream project. In addition, you may use the __--teams__ switch to enable team support:

#### Install Jetstream With Livewire

```bash

php artisan jetstream:install livewire

or

php artisan jetstream:install livewire --teams

```

### Install Jetstrap

Use Composer to install Jetstrap into your new Laravel project as dev dependency:

```

composer require Pixinvent/jetstrap-vuexy --dev
 

```

Regardless how you install Jetstream, Jetstrap commands are very similar to that

of Jetstream as it accepts the name of the stack you would like to swap (livewire).

> It is important you install and configure [Laravel Jetstream](https://github.com/laravel/jetstream) before performing a swap.

You are highly encouraged to read through the entire documentation of [Jetstream](https://jetstream.laravel.com/1.x/introduction.html)

before beginning your Jetstrap project. In addition, you may use the `--teams` switch to swap team assets just like you would in Jetstream:

```bash

php artisan jetstrap_vuexy:swap livewire


or



php artisan jetstrap_vuexy:swap livewire --teams

```

This will publish overrides to enable Bootstrap like the good old days!

### Finalizing The Installation

After installing Jetstrap and swapping Jetstream resources, remove tailwindCSS and its dependencies if any from your package.json and then install and build your NPM dependencies and migrate your database:

```

npm install && npm run mix
  

yarn && yarn mix


php artisan migrate

```

### Extras

#### Pagination

It is also important to point out that Laravel 8 still includes pagination views built using Bootstrap CSS. To use these views instead of the default Tailwind views, you may call the paginator's useBootstrap method within your AppServiceProvider:

```php

  

<?php


namespace  App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class  AppServiceProvider  extends  ServiceProvider
{

/**
* Register any application services.
*
* @return  void
*/

public  function  register()
{

//
  
}

/**
* Bootstrap any application services.
* @return  void
*/

public  function  boot()
{

Paginator::useBootstrap();

}

}

```

## License

Jetstrap is open-sourced software licensed under the [MIT license](https://github.com/pixinvent/jetstrap-vuexy/blob/master/LICENSE).
