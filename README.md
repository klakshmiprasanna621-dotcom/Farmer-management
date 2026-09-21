# 🌾 Farmer Support Management System

A web-based **DBMS academic project** developed using **PHP and MySQL** to manage farmer details and agricultural information such as crops, fertilizers, market prices, and government schemes.

The project uses **XAMPP** to run the PHP application and MySQL database locally.

---

## 📌 About the Project

The **Farmer Support Management System** provides a simple platform for an administrator to maintain agricultural records in an organized database.

The system can be used to:

* 👨‍🌾 Store and manage farmer details
* 🌱 Maintain crop information
* 🧪 Manage fertilizer records
* 💰 Store agricultural market prices
* 🏛️ Maintain government scheme details
* 🔎 Search farmer information
* 📊 Generate and view reports
* 🔐 Control access through admin login

---

## 🎯 Project Objectives

The main objectives of this project are:

* To create a structured agricultural database.
* To perform database operations through a web interface.
* To implement CRUD operations using PHP and MySQL.
* To maintain farmer and agricultural-related information.
* To demonstrate practical DBMS concepts.
* To provide an easy-to-use administration system.

---

## 💻 Technologies

| Technology | Usage                    |
| ---------- | ------------------------ |
| HTML       | Web page structure       |
| CSS        | Page design and styling  |
| PHP        | Backend programming      |
| MySQL      | Database management      |
| XAMPP      | Local development server |
| phpMyAdmin | Database administration  |

---

## ⭐ Main Modules

### 🔐 Admin Login

The administrator can securely log in to the system.

Features include:

* Admin authentication
* Session management
* Password hashing
* Password verification
* Logout

### 👨‍🌾 Farmer Module

The farmer module allows the administrator to:

* Add farmer details
* Display farmer records
* Update farmer information
* Delete farmer records
* Search for farmers

### 🌱 Crop Module

The crop section is used to maintain information about different crops.

Operations include:

* Add crop
* View crops
* Edit crop details
* Delete crop

### 🧪 Fertilizer Module

This module maintains fertilizer-related information.

The administrator can:

* Add fertilizer details
* View fertilizer records
* Update fertilizer information
* Delete fertilizer records

### 💰 Market Price Module

This section stores agricultural market price information.

The administrator can:

* Add market prices
* View available prices
* Maintain price-related records

### 🏛️ Government Scheme Module

This module provides information about agricultural government schemes.

The administrator can:

* Add scheme information
* View available schemes
* Maintain scheme records

### 📊 Reports

The reports section provides organized information from the database for easier viewing and management.

---

## 🗄️ Database

The project uses a MySQL database named:

```text
farmer_support_db
```

### Tables

```text
admin
farmers
crops
fertilizers
government_schemes
market_prices
```

### DBMS Concepts Implemented

* Primary Keys
* Foreign Keys
* Auto Increment
* SQL Queries
* CRUD Operations
* Relational Tables
* Database Connectivity
* Prepared Statements

---

## 🔗 Basic Database Relationship

The system connects related agricultural information using database relationships.

Example:

```text
       FARMERS
          |
          |
      farmer_id
          |
          ↓
        CROPS
```

This relationship allows crop information to be connected with farmer records.

---

## 📂 Project Files

```text
FARMER_SUPPORT_SYSTEM/
│
├── database/
│   └── farmer_support_db_github.sql
│
├── screenshots/
│   ├── login.png
│   ├── dashboard.png
│   ├── farmers.png
│   ├── crops.png
│   ├── fertilizers.png
│   ├── market_prices.png
│   ├── schemes.png
│   └── reports.png
│
├── add_crop.php
├── add_farmer.php
├── add_fertilizer.php
├── add_market_price.php
├── add_scheme.php
├── dashboard.php
├── db.php
├── delete_crop.php
├── delete_farmer.php
├── delete_fertilizer.php
├── edit_crop.php
├── edit_farmer.php
├── edit_fertilizer.php
├── farmers.php
├── index.php
├── login.php
├── logout.php
├── reports.php
├── search_farmer.php
├── style.css
├── view_crops.php
├── view_farmers.php
├── view_fertilizers.php
├── view_market_prices.php
├── view_schemes.php
└── README.md
```

---

## ⚙️ How to Run

### Step 1: Install XAMPP

Install **XAMPP** on your computer.

Make sure the following services are available:

```text
Apache
MySQL
```

### Step 2: Start XAMPP

Open XAMPP Control Panel and start:

```text
Apache
MySQL
```

### Step 3: Copy the Project

Copy the project folder into:

```text
C:\xampp\htdocs\
```

For example:

```text
C:\xampp\htdocs\FARMER_SUPPORT_SYSTEM\
```

### Step 4: Create Database

Open:

```text
http://localhost/phpmyadmin
```

Create a database named:

```text
farmer_support_db
```

### Step 5: Import SQL File

Select the database and choose **Import**.

Upload:

```text
database/farmer_support_db_github.sql
```

Then execute the import.

### Step 6: Check Database Connection

Open:

```text
db.php
```

The connection should be similar to:

```php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "farmer_support_db"
);
```

Update the values if your MySQL configuration is different.

### Step 7: Open the Website

Open your browser and enter:

```text
http://localhost/FARMER_SUPPORT_SYSTEM/
```

The application should now open.

---

## 🔑 Demo Account

A demo administrator account can be used for testing the application.

```text
Username: demo_admin
Password: zxMT9j%!ZZ^^WL^QjlP1
```

> This account is intended only for testing the academic project. Do not use the password for any personal account.

---

## 📸 Application Screenshots

### 🔐 Login Page

![Login](screenshots/login.png)

### 📊 Dashboard

![Dashboard](screenshots/dashboard.png)

### 👨‍🌾 Farmers

![Farmers](screenshots/farmers.png)

### 🌱 Crops

![Crops](screenshots/crops.png)

### 🧪 Fertilizers

![Fertilizers](screenshots/fertilizers.png)

### 💰 Market Prices

![Market Prices](screenshots/market_prices.png)

### 🏛️ Government Schemes

![Schemes](screenshots/schemes.png)

### 📊 Reports

![Reports](screenshots/reports.png)

---

## 🔒 Security

The project includes basic security practices such as:

* Password hashing with `password_hash()`
* Password checking with `password_verify()`
* Prepared SQL statements
* Session-based login
* Logout functionality

These features help protect the application's authentication and database operations.

---

## 📈 Future Improvements

The system can be enhanced in the future by adding:

* 📱 Mobile-friendly design
* 👨‍🌾 Farmer login
* 👤 Multiple user roles
* 📊 Data visualization
* 📈 Agricultural analytics
* 💹 Live market price updates
* 📩 SMS and email notifications
* ☁️ Cloud database support
* 🌐 Online deployment

---

## 📋 Project Details

| Category      | Details                          |
| ------------- | -------------------------------- |
| Project Name  | Farmer Support Management System |
| Project Type  | DBMS Academic Project            |
| Frontend      | HTML, CSS                        |
| Backend       | PHP                              |
| Database      | MySQL                            |
| Server        | XAMPP                            |
| Database Tool | phpMyAdmin                       |

---

## 👩‍💻 Developer

**K Lakshmi Prasanna**

---

## 🎓 Academic Project

This project was developed to demonstrate the practical use of **DBMS, PHP, MySQL, SQL queries, relational databases, and CRUD operations** in a web-based application.

⭐ **Thank you for visiting this project!**
