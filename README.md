# Local Event Finder

Local Event Finder is a web application built using **Laravel** and **CSS** that allows users to discover and browse local events in their area.

## 📌 Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [License](#license)

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
   git clone [https://github.com/FeliEdwrd/WTG.git](https://github.com/FeliEdwrd/WTG-Local-Event-Finder.git)
   cd local-event-finder
2. Install PHP dependencies:
   composer install
3. Set up environment file:
   cp .env.example .env
   php artisan key:generate
4. Configure your database in .env, then run:
   php artisan migrate --seed
5. Run the development server:
   php artisan serve


