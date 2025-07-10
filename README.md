# 🏨 Hotel Booking Website - Frontend Only

This repository contains the **frontend UI** of a hotel booking website. It is built using **HTML**, **CSS**, **Bootstrap**, and **JavaScript**, with some structural use of **PHP**. No backend logic or database connection is included.

---

## Project Overview

A clean and minimal hotel website with the following static pages:

- `index.php` – Home page
- `about.php` – About the hotel
- `contact.php` – Contact form (UI only)
- `room.php` – Room listings
- `facilities.php` – Facilities offered
- `dockerfile` – Optional Dockerfile to host this static project in a container

---

## Features

- Responsive and clean UI
- Static structure using PHP files
- Bootstrap-based layout for cross-device support
- No backend or database functionality included

---

## 📁 Folder Structure

├── index.php # Homepage
├── about.php # About section
├── contact.php # Contact form (no backend)
├── room.php # Rooms display
├── facilities.php # Hotel amenities
├── dockerfile # Optional for Docker hosting
└── assets/ # Images, CSS, JS (if applicable)


---

##  How to Run

### Option 1: Run with any local web server
You can use **XAMPP**, **WAMP**, or **MAMP** to serve these `.php` files locally.

1. Place the files in the `htdocs` (XAMPP) or equivalent directory.
2. Start Apache server.
3. Access the site via `http://localhost/index.php`.

### Option 2: Use Docker (for static hosting)

If you have Docker installed:

```bash
docker build -t hotel-frontend .
docker run -d -p 80:80 hotel-frontend
