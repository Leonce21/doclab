# Project Setup Guide

This guide provides instructions on how to import an SQL file into WampServer or XAMPP and place a project folder inside the WampServer or XAMPP directory.

## Prerequisites

- WampServer or XAMPP installed on your machine.
- A SQL file containing your database schema and data.
- Your project folder containing web files.

## Instructions

### 1. Start WampServer or XAMPP

Start your WampServer or XAMPP application. Ensure that the Apache and MySQL services are running.

### 2. Import SQL File

#### For WampServer:

1. Open your web browser and go to `http://localhost/phpmyadmin`.
2. Log in with your MySQL username and password.
3. Select the database where you want to import your SQL file.
4. Click on the "Import" tab.
5. Choose the SQL file you want to import using the "Choose File" button.
6. Click "Go" to initiate the import process.

#### For XAMPP:

1. Open your web browser and go to `http://localhost/phpmyadmin`.
2. Log in with your MySQL username and password.
3. Select the "Import" tab.
4. Choose the SQL file you want to import using the "Choose File" button.
5. Click "Go" to initiate the import process.

### 3. Place Project Folder

1. Locate the WampServer or XAMPP installation directory on your machine.
   - For WampServer, it's typically `C:\wamp\www`.
   - For XAMPP, it's usually `C:\xampp\htdocs`.

2. Copy your entire project folder into the respective directory mentioned above.

3. Access Your Project

   - For WampServer: Open your web browser and navigate to `http://localhost/your_project_folder`.
   - For XAMPP: Open your web browser and navigate to `http://localhost/your_project_folder`.

   Replace `your_project_folder` with the actual name of your project folder.

## Additional Notes

- Ensure that your project files are compatible with the version of PHP and MySQL installed with WampServer or XAMPP.
- Update any configuration files (e.g., database connection settings) in your project if necessary.
- Restart WampServer or XAMPP after making changes.

Happy coding!
