# Book Review App in PHP

## Introduction

The Book Review App is a web application designed to manage and showcase book reviews. It allows users to maintain a personal collection of books, including their reviews, and manage them through a user-friendly interface. This application was developed using PHP, MySQL, CSS, and HTML, with Docker used for containerization and deployment.

## What I Have Learned

### **Database Design and SQL**

- **Database Schema Design**: Created a comprehensive database schema for managing book reviews. Developed tables for users and book reviews, establishing relationships between them.
- **SQL Queries**: Gained experience in writing and optimizing SQL queries for CRUD operations (Create, Read, Update, Delete). Implemented data validation and integrity checks.

### **PHP Development**

- **Database Interaction**: Developed PHP scripts to interact with MySQL, handling user input, executing queries, and managing sessions.
- **Session Management**: Implemented PHP sessions for user authentication, ensuring secure login, review management, and user logout.

### **Front-End Development**

- **Responsive Design**: Applied CSS to ensure the application is mobile-first and responsive across various devices and screen sizes.
![image](https://github.com/user-attachments/assets/f3384644-7db7-49b1-86f7-cdbb556eb59b)
![image](https://github.com/user-attachments/assets/9c5643c4-0a42-4aa1-981e-57c9b9d6f514)



- **User Interface**: Designed a functional and clean UI using HTML and CSS, focusing on usability and accessibility.

### **Best Practices and Code Quality**

- **Naming Conventions**: Followed best practices for naming variables and functions using descriptive names adhering to PHP and MySQL standards.
- **Code Organization**: Enhanced code readability through proper indentation, meaningful comments, and a modular approach.

### **Docker and Deployment**

- **Containerization**: Utilized Docker to containerize the application, ensuring consistency in the development environment and simplifying deployment.
- **Docker Compose**: Managed multi-container applications with Docker Compose, including the PHP web server and the MySQL database.

## Features

- **User Authentication**: Users can register, log in, and manage their accounts.
- **Book Reviews**: Users can add, edit, and delete their book reviews. Reviews are associated with the logged-in user.
- **Review Management**: Users can view and manage their list of book reviews.

## Requirements & Installation

### **Using Docker**

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/Lundet/Case-6-php.git
    cd template-Case-6
    ```

2. **Build and Run the Docker Containers**:
    ```bash
    docker-compose up --build
    ```

    This command builds the Docker images and starts the containers for both the PHP application and the MySQL database.

3. **Access the Application**:
    - Open your browser and navigate to `http://localhost:8088`.

## Screenshots

![image](https://github.com/user-attachments/assets/5ddb5ca5-fdcd-4387-b3de-c6586f51ed85) ![image](https://github.com/user-attachments/assets/041eb8bd-1f18-426c-a30e-6a4415bbadf3)

![image](https://github.com/user-attachments/assets/971cfa38-8e6e-4bb7-9682-e896922c1f5e)

![image]



## Conclusion

This project has significantly enhanced my understanding of PHP and MySQL, providing practical experience in developing web applications. It has also refined my skills in front-end development, database management, Docker containerization, and project deployment.

