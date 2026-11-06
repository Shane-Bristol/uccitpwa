# UCC IT Web App (Progressive Web App)

An unofficial PWA for the UCC Department of Information Technology, built with Laravel.

## Builder
- Shane Bristol (#20227002)

## Features
- **Faculty/Staff Directory:** avatars, phone and email, with tap-to-call and tap-to-email
- **Courses:** 10 sample IT courses stored in a SQLite database (code, name, credits, pre-requisites, description)
- **Admissions:** programme details, entry requirements, and a link to UCC's online application
- **Social Media:** in-app Instagram embed, with Facebook and X feeds and open-in-browser fallbacks
- **Email FAB:** floating button that opens an email to the HOD
- **PWA:** installable, with a manifest and a service worker for offline use

## Tech Stack
HTML, CSS, JavaScript, Laravel (PHP), SQLite, `erag/laravel-pwa`

## Requirements
- PHP (see `composer.json` for the minimum version)
- Composer
- Chrome or Edge, to test installing the app

## Setup
```bash
git clone https://github.com/Shane-Bristol/uccitpwa.git
cd uccitpwa
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```
Open http://127.0.0.1:8000. Install works on `localhost`/`127.0.0.1`. A phone needs HTTPS.
If the install option doesn't appear, run `php artisan erag:update-manifest` and reload.

## Project Structure
- `routes/web.php`: all routes
- `app/Http/Controllers/`: `DirectoryController` (staff data lives here), `CourseController`
- `app/Models/Course.php`, `database/migrations/`, `database/seeders/` (`CourseSeeder`, `DatabaseSeeder`)
- `resources/views/`: Blade views, `layouts/app.blade.php`, `partials/icons.blade.php`
- `public/css/app.css`: all styles
- `public/icons/`, `public/images/staff/`: app icons and staff avatars
- `config/ucc.php`: HOD email, application link and social URLs
- `config/pwa.php`, `public/sw.js`, `public/offline.html`: PWA setup

## Notes
- Offline: the main pages are cached by the service worker. External links and social embeds need a connection.
- After changing cached files or adding avatars, add them to `PRECACHE` in `public/sw.js` and bump `VERSION`.
- Course detail pages are precached for IDs 1 to 10, matching the seeded data.
- Admissions details and the logo come from UCC's website (ucc.edu.jm). 
