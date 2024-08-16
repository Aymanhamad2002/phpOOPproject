PHP Course Management System
Project Overview
This is a simple Course Management System developed using Object-Oriented PHP. The application allows users to create, remove, and manage courses and students. Additionally, it provides functionalities for students to register and unregister for courses. All the data is stored in session variables, making the system lightweight and easy to deploy.

Features
Course Management
Add new courses.
Delete existing courses.
Display a list of available courses.
Student Management
Add new students.
Display a list of students.
Course Registration
Students can register for available courses.
Students can unregister from courses.
Session-Based Data Storage
All information is stored in session variables, eliminating the need for a database.
File Structure
Course.php: Handles course-related operations such as adding and deleting courses.
CourseList.php: Manages the list of available courses.
Manager.php: Central manager class for handling various operations.
Student.php: Handles student-related operations such as adding students.
StudentList.php: Manages the list of registered students.
addCourse.php: Form and logic to add a new course.
addStudent.php: Form and logic to add a new student.
confirm.php: Displays confirmation messages after successful operations.
deleteCourse.php: Logic to delete a course.
displayCourses.php: Displays a list of all courses.
displayStudent.php: Displays a list of all students.
index.php: The main entry point of the application.
init.php: Initializes the session and other necessary settings.
register.php: Handles the course registration process for students.
your-stylesheet.css:* Custom stylesheets for different parts of the application.
Getting Started
Prerequisites
PHP: Ensure you have PHP installed on your system.
Web Server: A local server setup (e.g., XAMPP, WAMP, or MAMP) is recommended for running the application.
Installation
Clone the Repository:

bash
Copy code
git clone [repository URL]
Navigate to the Project Directory:

bash
Copy code
cd [project-directory]
Start Your Local Server:

Place the project in your server's root directory (e.g., htdocs for XAMPP).
Start your web server.
Access the Application:

Open your web browser and navigate to http://localhost/[project-directory]/index.php.
Usage
Use the provided forms to add courses and students.
Manage course registration and view lists of students and courses.
All changes will persist as long as the session is active.
Notes
This project uses PHP sessions to store data, so all changes are temporary and will be lost when the session ends.
Contributing
Contributions are welcome! If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

License
This project is licensed under the MIT License - see the LICENSE file for details.

Contact
If you have any questions or feedback, feel free to contact me at [your-email@example.com].
