# Ruciel Mae Obias — Personal Portfolio

A personal e-portfolio website for **Ruciel Mae Obias**, a Bachelor of Science in Computer Science student. The site presents her profile, academic background, certificates, work experience, and programming projects in a single responsive page.

The page is authored with **Laravel Blade** templates and pre-rendered to static HTML for deployment, so it works on Vercel without requiring a PHP server at runtime.

## Overview

The portfolio is a cream-and-gold themed single-page site with smooth scrolling, section reveal animations, and interactive image viewers. It contains the following sections:

- **Home** — Name, degree, profile picture, and quick links to projects and contact.
- **About** — Short bio, core strengths, and buttons to view the resume and Personal Data Sheet (PDS) in an embedded document viewer.
- **Education** — Academic history, including college and senior high school background.
- **Certificates** — Horizontally scrollable certificate slider with a full-screen viewer that supports previous/next navigation, zoom, drag-to-pan, and keyboard controls.
- **Work Experience** — Roles and internships with descriptions.
- **Projects** — Project cards with screenshot galleries, descriptions, technology tags, GitHub repository links, and live site links where available. A "See more projects" toggle reveals additional academic projects.
- **Contact** — Location, email, phone, GitHub, Facebook, and a message form.
- **Footer** — Contact summary, profile image, and copyright.

The site also includes a scroll-to-top button, an active navigation indicator based on scroll position, and a responsive mobile navigation menu.

## Featured Projects

- **Balai ti Arjud Online Appointment and Inventory System** — PHP and MySQL web system with GitHub and live site links.
- **Boarding House System Management** — VB.NET and SQL Server desktop system.
- **Online Ordering & Reservation System for MCA Cafe** — Laravel and MySQL system.
- **Personal Portfolio Website** — HTML, CSS, and JavaScript.
- Additional academic projects built with Java, Python, C#, VB.NET, MS Access, and SQL Server.

Each project card can open a lightbox gallery with screenshots and a description.

## Technologies Used

| Technology | Usage |
| --- | --- |
| **Laravel Blade** | Templating engine, provided standalone by `jenssegers/blade` |
| **PHP 8.1+** | Runs the Blade render script at build time |
| **Composer** | Installs the standalone Blade engine |
| **HTML5** | Pre-rendered page structure |
| **CSS3** | Styling, responsive layout, animations in `src/css/app.css` |
| **JavaScript (vanilla)** | Navigation, scrollspy, lightbox, certificate viewer, zoom/pan, file viewer, project toggle in `src/js/app.js` |
| **Vite 8** | Development server and production build |
| **Font Awesome 6.5.2** | Icons, loaded via CDN |
| **Vercel** | Static deployment configured in `vercel.json` |

There is no Laravel application, database, or backend server. Blade is used only as a build-time templating layer.
