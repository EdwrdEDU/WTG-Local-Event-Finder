# Local Event Finder

Local Event Finder is a web application built using **Laravel** and **CSS** that allows users to discover and browse local events in their area.

## 📌 Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)

## ✨ Features

- View upcoming events with details
- Filter events by category, date, or location
- Responsive UI using pure CSS
- Laravel-powered backend with clean MVC structure

## 🛠️ Tech Stack

- **Framework:** Laravel 10.x
- **Language:** PHP
- **Frontend:** HTML, CSS (no JS framework)
- **Database:** MySQL
- **Templating Engine:** Blade

## 🚀 Installation

1. Clone the repository:
git clone https://github.com/EdwrdEDU/WTG-Local-Event-Finder.git

2. Navigate into the project folder:
cd local-event-finder

3. Install PHP dependencies:
composer install

4. Install frontend assets:
npm install && npm run dev

5. Copy the example environment file:
cp .env.example .env

6. Generate the application key:
php artisan key:generate

7. Configure your .env file with your database credentials.

8. Run the database migrations and seeders:
php artisan migrate --seed

9. Start the development server:
php artisan serve

10. Open the app in your browser at:
http://localhost:8000


