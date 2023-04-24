# Student-Records Application

This is a web application for student records. Authorized users can add new students to the record and search the record. 
The application is written in PHP and uses a MySQL database to store student information.

# Files
index.php: This is the homepage of the application. It provides a brief description of the application and options to login or register.

login.php: This page allows users to log in to the application using their username and password.

login1.php: This page processes the login request and redirects the user to the view students page if the login is successful, otherwise it redirects back to the login page with an error message.

header.php: This file contains the header of the application, which includes links to the home page, registration page, login page, add student page, and view students page.

config.php: This file contains the database connection information.

checkSession.php: This file checks whether a user is logged in or not. If not, it redirects the user to the login page.

addStudent.php: This page allows authorized users to add new students to the record.

viewStudents.php: This page displays the list of existing students in the record and allows authorized users to search for a student by name or student ID.
Usage

# To use this application, follow these steps:

Go to the URL http://imranfi.dev.fast.sheridanc.on.ca/GitHub/a4-fizza-imran/index.php to access the homepage.

If you are a new user, click on the "Register" link in the header and fill out the registration form. If you are an existing user, click on the "login" link in the header and enter your username and password.

Once logged in, you can add a new student to the record by clicking on the "Add new Student" link in the header and filling out the form.

To view existing students, click on the "View Existing Students" link in the header. You can search for a student by name or student ID using the search box.
To log out of the application, click on the "logout" link in the header.

# Note: 
Only authorized users can add new students and view existing students. Unauthorized users will be redirected to the login page.
