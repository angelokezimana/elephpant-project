# Elephpant project

> This project is for learning purposes only and entirely inspired by [Zura Sekhniashvili](https://www.youtube.com/thecodeholic)'s video course.
>
> You can find that video course on the [freeCodeCamp youtube channel](https://www.youtube.com/watch?v=6ERdu4k62wI) and the source code [here](https://github.com/thecodeholic/php-mvc-framework).
>
> <a href="http://www.youtube.com/watch?feature=player_embedded&v=6ERdu4k62wI
" target="_blank"><img src="http://img.youtube.com/vi/6ERdu4k62wI/0.jpg" alt="Use PHP to Create an MVC Framework - Full Course" width="240" height="180" border="10" /></a>

## Installation

1. First of all, clone this project `git clone https://github.com/angelokezimana/elephpant-project.git`;
2. Navigate to the root project folder `cd elephpant-project`;
3. Install the dependencies of this project via composer `composer install`;
4. Copy the `.env.example` file and rename it to `.env` or just use `cp .env.example .env`;
5. Change the credentials of your database in the `.env` file;
6. Run migrations `php migrations.php`.

Run php built-in web server `php -S 127.0.0.1:8000 -t public`.
