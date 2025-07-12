**#PHP Connectivity CRUD App**
A simple PHP web application demonstrating CRUD operations using MySQL and phpMyAdmin.

🚀 Features
>Create new records via create.php
>Read and list existing records on index.php
>Update/Edit records through update.php
>Delete records using delete.php
>View details of each record using view.php

**Database connection and configuration managed via config.php** 

🗂️ File Structure
#php-connectivity/
├── config.php      – MySQL connection settings
├── create.php      – Add a new record
├── index.php       – List all records
├── view.php        – View record details
├── update.php      – Edit existing record
└── delete.php      – Remove a record


🔧 Prerequisites
>PHP (≥ 5.6)
>MySQL / MariaDB
>phpMyAdmin (or another MySQL management tool)
>Web server (Apache, Nginx, or built‑in PHP server)


🛠 Installation
#Clone this repository:

$git clone https://github.com/codewithadityaj/php-connectivity.git
$cd php-connectivity
$Create a MySQL database (e.g., crud_app) and a table (example schema below).


#Update config.php with your database credentials:

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_app";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


#Use phpMyAdmin (or another tool) to run:

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Start your web server (e.g., php -S localhost:8000) and visit http://localhost:8000/index.php.


💡 Usage
>Add a new user on create.php
>View all users via index.php
>View details on view.php?id={user_id}
>Edit a user with update.php?id={user_id}
>Delete a user via delete.php?id={user_id}



📝 Customization
>Rename table/columns in SQL and update code accordingly.
>Add validation, styling, or user authentication as needed.
>Secure database inputs using prepared statements to prevent SQL injection.
