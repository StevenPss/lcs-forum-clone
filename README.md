<h1 align="center">Laracast forum clone</h1>

<div align="center">

A laracasts forum clone website developed using the [Laravel](https://laravel.com/) php framework.

[![license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/StevenPss/lcs-forum-clone/blob/main/LICENSE)
<img src="https://img.shields.io/badge/developed%20by-StevenPss-blue.svg">
[![Follow on GitHub](https://img.shields.io/github/followers/StevenPss?label=Follow&style=social)](https://github.com/StevenPss)
<img src="https://img.shields.io/github/stars/StevenPss/lcs-forum-clone.svg?style=flat">
<img src="https://img.shields.io/github/languages/top/StevenPss/lcs-forum-clone.svg"/>
[![issues](https://img.shields.io/github/issues/StevenPss/lcs-forum-clone.svg)](https://github.com/StevenPss/blog/issues)
[![issues](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat)](https://github.com/StevenPss/lcs-forum-clone/pulls)

</p>

</div>

## Laracasts forum clone

All contributions are welcomed! (but please submit an issue to make sure the PR is warranted first)

## Installation

1. Clone this repo
    ```zsh
    ~ git clone https://github.com/StevenPss/lcs-forum-clone
    ```
2. Access your project directory
   ```zsh
    ~ cd lcs-forum-clone
   ```
3. Install the project dependencies
   ```zsh
    ~ composer install
   ```
4. Create a copy of your **.env** file
   ```zsh
    ~ cp .env.example .env
   ```
5. Generate your **encryption key**
   ```zsh
    ~ php artisan key:generate
   ```
6. Create an empty database for your project
   * Using any database tools you prefer *(I use [TablePlus](https://tableplus.com/). if you use windows then I recommend a tool called [Laragon](https://laragon.org/))*
7. Configure your **.env** file to allow a connection to the database
   * In the **.env** file, fill in the options **DB_HOST**, **DB_PORT**, **DB_DATABASE**, **DB_USERNAME** and **DB_PASSWORD** so that they match the credentials of the database you have just created.
   * Make sure to configure the mail. I used [Mailtrap](https://mailtrap.io/) for my local email testing.
8. **Migrate** the database architecture
   ```zsh
    ~ php artisan migrate:refresh --seed
   ```
9. Run the application
   ```zsh
    ~ php artisan serve
   ```
10. Login or Register an account
    * **Email**: `verification of emails takes place.`
    

## Features

Features include:


## License

This project is an open-sourced software licensed under the [MIT license](https://github.com/StevenPss/lcs-forum-clone/blob/main/LICENSE).