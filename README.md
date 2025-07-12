PHP CRUD App using MySQL
A beginner-friendly PHP application that demonstrates basic CRUD (Create, Read, Update, Delete) operations using MySQL and procedural PHP.

Ideal for students and new developers learning PHP and database integration.
Features
- Add new records
- View all records in a table
- View details of a specific record
- Edit existing records
- Delete records
- Minimal UI and clean code structure
Project Structure
php-connectivity/
├── config.php             # Database connection setup
├── create.php             # Create new record
├── index.php              # Home - list all records
├── view.php               # View details of a single record
├── update.php             # Edit existing record
└── delete.php             # Delete a record
Database Setup
1. Open phpMyAdmin (or any MySQL client)
2. Run the following SQL commands to create the database and table:
CREATE DATABASE php_crud;

USE php_crud;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Configuration
1. Open config.php and update it with your local database credentials:
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_crud";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
Running the App
Option 1: Using XAMPP or WAMP
- Move the php-connectivity folder to the htdocs directory.
- Open your browser and go to: http://localhost/php-connectivity/index.php

Option 2: Using PHP’s built-in server
- Navigate to the project folder and run: php -S localhost:8000
- Open http://localhost:8000/index.php in your browser.
Usage
- Add a user using create.php
- View all users on index.php
- Edit or delete using the links in the action column
- View details via view.php?id={user_id}
Customization Tips
- Add more fields like phone, address, etc.
- Replace inputs with Bootstrap or Tailwind CSS for better UI.
- Use sessions for authentication.
- Convert to object-oriented PHP or use PDO for modern practices.
Security Note
This project uses raw SQL queries for learning purposes.
For production apps:
- Use prepared statements or PDO to prevent SQL injection.
- Sanitize and validate all user inputs.
- Use HTTPS in deployment environments.


Author
Aditya Ashok Jadhav
GitHub Profile: https://github.com/codewithadityaj
