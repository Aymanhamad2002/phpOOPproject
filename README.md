# PHP Course Management System

## Project Overview
This is a simple Course Management System developed using Object-Oriented PHP. The application allows users to create, remove, and manage courses and students. Additionally, it provides functionalities for students to register and unregister for courses. All the data is stored in session variables, making the system lightweight and easy to deploy.

## Features

### Course Management
- Add new courses.
- Delete existing courses.
- Display a list of available courses.

### Student Management
- Add new students.
- Display a list of students.

### Course Registration
- Students can register for available courses.
- Students can unregister from courses.

### Session-Based Data Storage
- All information is stored in session variables, eliminating the need for a database.

## File Structure

- **Course.php:** Handles course-related operations such as adding and deleting courses.
- **CourseList.php:** Manages the list of available courses.
- **Manager.php:** Central manager class for handling various operations.
- **Student.php:** Handles student-related operations such as adding students.
- **StudentList.php:** Manages the list of registered students.
- **addCourse.php:** Form and logic to add a new course.
- **addStudent.php:** Form and logic to add a new student.
- **confirm.php:** Displays confirmation messages after successful operations.
- **deleteCourse.php:** Logic to delete a course.
- **displayCourses.php:** Displays a list of all courses.
- **displayStudent.php:** Displays a list of all students.
- **index.php:** The main entry point of the application.
- **init.php:** Initializes the session and other necessary settings.
- **register.php:** Handles the course registration process for students.
- **your-stylesheet*.css:** Custom stylesheets for different parts of the application.

## Getting Started

### Prerequisites
- **PHP:** Ensure you have PHP installed on your system.
- **Web Server:** A local server setup (e.g., XAMPP, WAMP, or MAMP) is recommended for running the application.

### Installation

1. **Clone the Repository:**
   ```bash
   git clone [repository URL]
