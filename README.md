# Online Chat Application System

## 📌 Project Overview

The Online Chat Application System is a web-based communication platform that allows users to register, log in, and exchange messages in real time. The system provides a simple, secure, and user-friendly environment for online communication using modern web technologies.

This project was developed as part of the Diploma in Computer Science Engineering curriculum to demonstrate concepts of web development, database management, user authentication, and client-server communication.

---

## 🚀 Features

* User Registration and Login
* Secure Authentication System
* Real-Time Messaging
* One-to-One Chat Functionality
* User Profile Management
* Online User Status
* Chat History Storage
* Responsive User Interface
* Session Management
* Logout Functionality

---

## 🛠️ Technologies Used

### Frontend

* HTML5
* CSS3
* JavaScript

### Backend

* PHP 5.6

### Database

* MySQL

### Development Tools

* XAMPP Server
* Visual Studio Code
* phpMyAdmin

---



## ⚙️ Installation Guide

### Step 1: Clone the Repository

```bash
git clone https://github.com/your-username/online-chat-application.git
```

### Step 2: Move Project to XAMPP

Copy the project folder into:

```text
C:\xampp\htdocs\
```

### Step 3: Start Apache and MySQL

Open XAMPP Control Panel and start:

* Apache
* MySQL

### Step 4: Import Database

1. Open phpMyAdmin
2. Create a new database named:

```sql
chat_app
```

3. Import the provided SQL file:

```text
chat_app.sql
```

### Step 5: Configure Database Connection

Update database credentials in:

```php
config.php
```

### Step 6: Run the Project

Open your browser and visit:

```text
http://localhost/online-chat-application
```

---

## 🗄️ Database Design

### Users Table

| Field     | Type    |
| --------- | ------- |
| user_id   | INT     |
| unique_id | VARCHAR |
| fname     | VARCHAR |
| lname     | VARCHAR |
| email     | VARCHAR |
| password  | VARCHAR |
| img       | VARCHAR |
| status    | VARCHAR |

### Messages Table

| Field           | Type    |
| --------------- | ------- |
| msg_id          | INT     |
| incoming_msg_id | VARCHAR |
| outgoing_msg_id | VARCHAR |
| msg             | TEXT    |

---

## 🔒 Security Features

* Password Encryption
* Session-Based Authentication
* Input Validation
* SQL Injection Prevention
* Secure Login System

---

## 🎯 Project Objectives

* Provide a platform for online communication.
* Implement secure user authentication.
* Store and manage chat history.
* Demonstrate web application development concepts.
* Improve understanding of PHP and MySQL integration.



## 🔮 Future Enhancements

* Group Chat Support
* Voice Messaging
* Video Calling
* File Sharing
* Dark Mode
* Push Notifications
* End-to-End Encryption

---

## 👨‍💻 Author

**Maroof Khan**

Diploma in Computer Science Engineering

Aligarh Muslim University

---

## 📜 License

This project is developed for educational and learning purposes.

Feel free to use, modify, and improve it for academic projects.

---


