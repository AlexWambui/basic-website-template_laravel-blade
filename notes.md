## Features
- Authentication.
- Admin Dashboard.
- Users (CRUD).
- Messages from contact page (RUD).


## Installation
1. Clone the Repository
    ```bash
    git clone git@github.com:AlexWambui/basic-website-template_laravel-blade.git
    ```
2. Install the dependencies
    ```bash
    composer install && npm install
    ```
3. Set up the Environment file
    ```bash
    cp .env.example .env
    ```
4. Generate the application key variable for the .env file
    ```bash
    php artisan key:generate
    ```
5. Run the migrations
    ```bash
    php artisan migrate
    ```


## Usage
1. Start the local development server
    ```bash
    php artisan serve
    ```
2. Open your browser and navigate to the following address: [http://localhost:8000](http://localhost:8000)


### Laravel Details
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>


-------------------------------------------------
Sass:
cd resources/css && sass -w pages/HomePage.scss:pages/HomePage.css pages/AboutPage.scss:pages/AboutPage.css pages/ContactPage.scss:pages/ContactPage.css pages/ServicesPage.scss:pages/ServicesPage.css pages/Authentication.scss:pages/Authentication.css
