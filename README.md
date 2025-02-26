# Symfony Application

This is a simple **Symfony** application with basic authentication and a multi-step sign-in form. It demonstrates the use of **PHP**, **Symfony**, and **Twig** for templating.

---

## Prerequisites
Before you begin, ensure that your system has the following dependencies installed:

PHP 8.2+ (or newer) with the required extensions:
curl, intl, xml, mbstring, pdo, pdo_mysql, opcache, json
Composer – PHP dependency manager for installing the required libraries.

---

## Installation

Clone the Repository:

`git clone https://github.com/yourusername/symfony-app.git
cd symfony-app`

Run the following Composer command to install the necessary PHP dependencies:
`composer install --no-dev --optimize-autoloader`

Start the Symfony local server:
`symfony server:start`

You should now be able to access the application in your browser at http://127.0.0.1:8000.

---

## Folder Structure
The project follows a typical Symfony structure, with key directories explained below:

src/ - Contains the PHP source code for your application (controllers, ...).
templates/ - Contains Twig templates for rendering HTML views.
public/ - The web root directory (where index.php resides).

---

## Features
Multi-step Sign-in Flow: The app includes a simple sign-in flow with multiple steps:
A "Sign In" page with a button.
A second page to input an email address.
A third page to input a password and validate the form.

---

## Troubleshooting
If you encounter any issues, consider the following:

Missing PHP Extensions: If you see errors about missing extensions like curl, intl, or xml, ensure they are installed on your system.

Cache Issues: If the page doesn’t reflect changes, try clearing the Symfony cache with the command:
`php bin/console cache:clear`
