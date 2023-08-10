# Registration Form with CRUD Operations

This project is a simple registration form application built using HTML, CSS, and PHP. It allows users to register, update their information, and delete their registration records. The project uses the XAMPP server for local development.

## Features

- User registration: Collects user information including name, email, and password.
- User update: Allows users to modify their registered information.
- User deletion: Enables users to delete their registration records.

## Technologies Used

- HTML
- CSS
- PHP
- XAMPP Server

## Getting Started

These instructions will help you set up and run the project on your local machine.

### Prerequisites

1. Install [XAMPP](https://www.apachefriends.org/index.html) on your machine.
2. Clone this repository to your local machine or download the ZIP file and extract it.

### Setup

1. Start the XAMPP control panel and start the Apache and MySQL services.
2. Open a web browser and go to `http://localhost/phpmyadmin/`.
3. Create a new database named `curd`.
4. Import the `registration_form.sql` file located in the project's root directory to set up the required table.
5. Copy the project folder to the `htdocs` directory of your XAMPP installation (e.g., `C:\xampp\htdocs\`).
6. Open your web browser and navigate to `http://localhost/CURD`.

## Usage

- **Registration:** Fill out the registration form with your details and click the "Register" button.
- **Update:** navigate to the update page to modify your information.
- **Delete:** navigate to the delete page to remove your registration record.
- **Display:** display the all registration data in form of table.

## File Structure

- `form1.php`: The main registration form page.
- `update.php`: Allows users to update their registered information.
- `delete.php`: Enables users to delete their registration records.
- `connection.php`: Contains database configuration.
- `display.php`: Display The Database

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any enhancements or bug fixes.
