# CCE Department Portal | School Activity

A lightweight web-based department portal application designed to streamline internal school workflows, track academic records, and display department-specific information.

Built as a computer science school activity by Karylle Mish Gellica and Joana Bravo, University of Mindanao.

---

## What This Does

This application serves as a dedicated portal for the College of Computing Education (CCE) department. 
It provides an organized digital space where students and faculty can access academic tracking resources, view departmental announcements, and handle administrative course requirements without digging through scattered physical files or unrelated platforms.

---

## Features

- **Department Dashboard:** A clean homepage highlighting vital CCE updates and notifications
- **Academic Record Ingestion:** Secure data rendering for checking course information on the fly
- **Interactive User Views:** Distinct layouts tailored to student navigation needs
- **Responsive Layout:** Works smoothly on both desktop and mobile screens for quick on-campus access

---

## Installing and Running Locally

Follow these steps to run this project inside your local XAMPP environment.

### What You'll Need First

Make sure you have these running before starting:

- **XAMPP Control Panel** — With both **Apache** and **MySQL** services turned on (showing green).
- **Git** — Installed on your computer to copy the files down.

---

### Step 1 — Clone the Repository into XAMPP

Open your terminal or command prompt, move directly into your local XAMPP web directory, and clone the codebase:

```bash
cd C:\xampp\htdocs
git clone [https://github.com/mishgellica/cce-dept.git](https://github.com/mishgellica/cce-dept.git)
```
---

### Step 2 — Set Up the Relational Database
Open your web browser and navigate to http://localhost/phpmyadmin/

Click New on the left-hand sidebar to create a fresh database.

Name the database exactly cce_dept (or match your project's database file configuration) and click Create.

Click on your new database in the sidebar, select the Import tab at the top, choose your project's .sql schema file from the folder, and click Go.

---

### Step 3 — Launch and Test the App
Open a new tab in your internet browser and navigate straight to the project directory line:
http://localhost/cce-dept/index.php

Tech Stack
Backend Logic Server: PHP 8.x
Database Engine: MySQL (Relational Schema)
Frontend Core: HTML5, CSS3, JavaScript

---

## Limitations
Academic Sandbox Scope: This is a small project built specifically for a class activity, focusing on core requirements rather than large corporate production loads.
Local Network Deployment: The system is built to run on a local machine environment (localhost) using basic database connection parameters.

---

## Authors
Karylle Mish T. Gellica — k.gellica.544337@umindanao.edu.ph
Joana Bravo — j.bravo.546336@umindanao.edu.ph

BS Computer Science, University of Mindanao — CCE School Activity, 2026

---

## License
This project is for academic and educational purposes only.
