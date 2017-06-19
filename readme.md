## MartyBlog

This is a simple code sample application I've written. Much of my work in PHP
and Laravel is behind an NDA, so I needed a way to show that I do have working
knowledge of this language and framework.

### Running

This application should run on PHP7 (and possibly earlier versions, although
I haven't tried it) with the various extensions needed to run the Laravel
framework (version 5.4). Installing dependencies requires `npm` and `composer`.

These commands should get you up and running:

```
git clone git@github.com:mpendergast/LaravelCodeSampleBlog.git
cd LaravelCodeSampleBlog/
cp .env.example .env
touch database/database.sqlite
composer install
npm install
php artisan migrate --seed
php artisan serve
```

At this point, the application should be running on http://localhost:8000
