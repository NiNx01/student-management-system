# Student Management System

This project is a backend system for managing student data. It allows teachers/admins to create an account, log in, view, edit, delete, add new students' data, and search for student data.

## Setup

### Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) installed on your machine.
- Basic knowledge of PHP and MySQL.

### Installation Steps

1. Clone this repository to your local machine:

```bash
git clone https://github.com/your-username/student-management-system.git
```

2. Start XAMPP and ensure that Apache and MySQL servers are running.

3. Navigate to the htdocs directory within your XAMPP installation directory.

4. Move the cloned repository folder (student-management-system) into the htdocs directory.

5. Import the provided database.sql file into your MySQL database:
- Open phpMyAdmin by visiting http://localhost/phpmyadmin in your web browser.
- Create a new database named student_management_system.
- Select the newly created database.
- Click on the "Import" tab.
- Choose the database.sql file from the cloned repository.
- Click on the "Go" button to import the database schema.

6. Update the database configuration:

- Navigate to config directory.
- Open database.php file.
- Update the database configuration variables ($db['default']['hostname'], $db['default']['username'], $db['default']['password']) according to your MySQL setup.

7. Open your web browser and navigate to http://localhost/student-management-system to access the application.

### Usage
1. Login: Navigate to the login page and enter your credentials to log in.

2. View Students: Once logged in, you can view all the students' data.

3. Edit Data: You can edit existing student data by clicking on the "Edit" button next to each student entry.

4. Delete Data: To delete a student's data, click on the "Delete" button next to the student entry.

5. Add New Student: Click on the "Add Student" button to add a new student's data.

6. Search: Use the search feature to find specific student data by entering relevant keywords.

### Contributors
Parampreet Singh
