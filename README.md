![GitHub contributors](https://img.shields.io/github/contributors/giovanniBombardieri/FruityVice)
![Github issues](https://img.shields.io/github/issues/giovanniBombardieri/FruityVice)
![GitHub forks](https://img.shields.io/github/forks/giovanniBombardieri/FruityVice?style=flat)
![Github stars](https://img.shields.io/github/stars/giovanniBombardieri/FruityVice?style=flat&color=%23EF2D5E)

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/giovanni-bombardieri-13ba7021b/)

<!-- PROJECT -->
<h1 align="center">OrizonTravel</h1>

<p align="center">
  <a href="https://github.com/GiovanniBombardieri/Improve">View Demo</a>
  ·
  <a href="https://github.com/GiovanniBombardieri/Improve/issues/new?labels=bug&template=bug-report---.md">Report Bug</a>
  ·
  <a href="https://github.com/GiovanniBombardieri/Improve/issues/new?labels=enhancement&template=feature-request---.md">Request Feature</a>
</p>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
        <li><a href="#specifications">Specifications</a></li>
        <li><a href="#project-structure">Project Structure</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#system-requirements">System Requirements</a></li>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#useful-commands">Useful Commands</a></li>
      </ul>
    </li>
    <li><a href="#license">License</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## About The Project

Orizon is a travel agency created to help people discover sustainable travel experiences that can broaden their horizons. <br>
Here you find the RESTful JSON APIs that will help the agency to promote last minute deals.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- BUILD WITH -->
### Built With

* ![Laravel](https://img.shields.io/badge/-Laravel-333333?style=flat&logo=laravel)
* ![PHP](https://img.shields.io/badge/-PHP-333333?style=flat&logo=php)
* ![MySQL](https://img.shields.io/badge/-MySQL-333333?style=flat&logo=mysql)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- SPECIFICATIONS -->
### Specifications

* The APIs are all REST compliant, especially regarding naming, methods and response status codes.
* The APIs allow the insertion, modification and deletion of a country that will have only one characteristic: the name.
* The APIs allow the insertion, modification and deletion of a trip that will have the following characteristics: the countries that involve the trip, the number of available places.
* Finally, the APIs allow you to view all the trips entered, filter them by country and by number of available places.
* MySQL was used as a database to store your information.
* You can find a migrations.sql file to reconstruct the structure of your database.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- PROJECT STRUCTURE -->
### Project structure

```
OrizonTravel/
├── app/                      # Root directory of the Laravel application
│   ├── Http/                 # Contains controllers, middleware and requests
│   │   ├── Controllers/      # Application controllers
│   ├── Models/               # Eloquent templates
│   ├── Providers/            # Laravel Service Providers
│
├── database/                 # Database configuration and migrations
│   ├── migrations/           # Migration files
│   ├── seeders/              # Seeder to populate database
│   ├── factories/            # Factory to generate dummy data
│
├── public/                   # Contains public assets (images, CSS, JS)
│
├── resources/                # Assets for views and components
│
├── routes/                   # Route definition
│   ├── web.php               # Frontend routes
│   ├── api.php               # API routes
│   ├── console.php           # Custom Artisan commands
│
├── storage/                  # Log, cache and uploaded file storage
│
├── artisan                   # Laravel CLI
├── composer.json             # PHP dependency management
├── package.json              # JavaScript dependency management (if used)
├── .env                      # Environment configuration

```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Getting Started

### System Requirements

To run this application, make sure you have the following requirements:

* PHP ≥ 8.1
* Composer
* MySQL / PostgreSQL (or another database supported by Laravel)
* Node.js (optional, if using assets built with Vite or Webpack)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Installation

Follow these steps to setup the application locally:

- **Clone the repository:**

```bash
git clone https://github.com/your-user/your-repository.git
cd your-repository
```

- **Install PHP dependencies:**

```bash
composer install
```

- **Create the .env file and set up environment variables:**

```bash
cp .env.example .env
```

- **Generate the application key:**

```bash
php artisan key:generate
```

- **Set up the database in the .env file, then run the migrations:**

```bash
php artisan migrate --seed
```

- **(Optional) Install the frontend dependencies and build the assets:**

```bash
npm install && npm run dev
```

- **Start the development server:**

```bash
php artisan serve
```

L'applicazione sarà accessibile su ```http://127.0.0.1:8000/.```

<p align="right">(<a href="#readme-top">back to top</a>)</p>


### Useful Commands

Here are some useful commands to work with the application:

- Start the local server: ```php artisan serve```

- Perform migrations: ```php artisan migrate```

- Create a controller: ```php artisan make:controller ControllerName```

- Clear the cache: ```php artisan cache:clear```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Giovanni - [@linkedin](https://www.linkedin.com/in/giovanni-bombardieri-13ba7021b/) - g.bombardieri06@gmail.com

Project Link: [https://github.com/GiovanniBombardieri/OrizonTravel](https://github.com/GiovanniBombardieri/OrizonTravel)

<p align="right">(<a href="#start">back to top</a>)</p>
