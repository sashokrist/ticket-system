
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Ticket system

Laravel 8 project, Ticket system that handles user tickets, user can publish a new ticket, to see all tickets opened or closed by him, to leave a comment to the administrators. Administrators can leave comments, close the ticket. Admin sees all published tickets

How to run it?
1. Download and install xampp https://www.apachefriends.org/download.html
2. Install Composer https://getcomposer.org/Composer-Setup.exe
3. Open Git bash or PowerShell
4. Navigate to project directory ex: cd /c//xampp/htdocs/sed
5. composer global require "laravel/installer=~1.1"
6. git clone git@github.com:sashokrist/ticket-system.git
7. composer install
8. cp .env.example .env
9. php artisan key:generate
10. php artisan serve

Open project on localhost:8000
