## CMS Nuthink

Ini dibuat ngikutin tutorial

This is an example of how to build a CMS from scratch with Laravel and Vue. You can read the article on Pusher here:
* [Part One](https://pusher.com/tutorials/cms-laravel-vue-part-1)
* [Part Two](https://pusher.com/tutorials/cms-laravel-vue-part-2)
* [Part Three](https://pusher.com/tutorials/cms-laravel-vue-part-3)
* [Part Four](https://pusher.com/tutorials/cms-laravel-vue-part-4)
* [Part Five](https://pusher.com/tutorials/cms-laravel-vue-part-5)
* [Part Six](https://pusher.com/tutorials/cms-laravel-vue-part-6)

## How to Setup a Laravel Project You Cloned from Github.com

* Clone GitHub repo for this project locally
`git clone https://github.com/irvankadhafi/nuthink-cms`
   
* masuk ke folder
`cd nuthink-cms`

* `composer install`
* `npm install`
* `php artisan key:generate`
* Buat database dengan nama db_cms
* ganti nama `.env.example` menjadi `.env`
* `php artisan migrate`
* `php artisan db:seed` (Optional)
* selesai
