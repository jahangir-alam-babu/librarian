
# Librarian

Librarian is a comprehensive web application for managing a library system. It is designed to streamline the library operations and make it easier for librarians to manage the library resources efficiently. The application offers a user-friendly interface with a range of features that simplify the tasks of cataloging, circulation, and inventory management.

With Librarian, librarians can easily create, manage and update a library catalog, including all relevant information about books, authors, publishers, and other resources. The system allows for easy search and retrieval of books, making it easier for library users to find the materials they need. Additionally, Librarian makes it possible to track and manage borrowing, lending, and reservations of books, allowing librarians to efficiently handle circulation and minimize delays.

The application is highly customizable, with options for configuring settings such as loan periods, overdue fines, and borrowing rules. Librarian also includes reports and analytics features that provide insights into library usage patterns, trends, and performance, enabling librarians to make informed decisions about the collection and allocation of resources.

Overall, Librarian is an essential tool for modern libraries, providing an efficient and effective way to manage library resources and improve the user experience for library patrons.





## Badges

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)


## Features

- Manage Books
- Manage Students


## Run Locally

Clone the project:

```bash
  git clone 
```

Go to the project directory:

```bash
  cd Librarian
```

Install the project dependencies using Composer:

```bash
  composer install
```

Create a copy of the .env.example file and rename it to .env:

```bash
  cp .env.example .env
```

Generate an application key:

```bash
  php artisan key:generate
```

Set up your database by editing the .env file and entering your database credentials.

Run database migrations:

```bash
  php artisan migrate
```

That's it! You've successfully installed a Laravel project from Git. You can now run the project locally by starting the development server using the command:

```bash
  php artisan serve
```

If you are using laragon then you can ignore artisan serve


## Admin Login

Email: admin@demo.com
Password: 12345678


## Author

- [@jahangir-alam-babu](https://www.github.com/jahangir-alam-babu)

