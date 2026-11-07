# Ruciel Mae Obias — Personal Portfolio

A personal e-portfolio website for **Ruciel Mae Obias**, a Bachelor of Science in Computer Science student. The site presents her profile, academic background, certificates, work experience, and programming projects in a single responsive page.

> **Note:** Although this repository includes some Laravel/Boost tooling configuration files, the portfolio itself is a **static front-end website** built with HTML, CSS, vanilla JavaScript, and Vite. There is no Laravel application, PHP backend, database, or Composer setup in this repository.

## Overview

The portfolio is designed as a clean, cream-and-gold themed single-page site with smooth scrolling, section reveal animations, and interactive image viewers. It contains the following sections:

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

The project section highlights both web and academic projects, including:

- **Balai ti Arjud Online Appointment and Inventory System** — PHP and MySQL web system with GitHub and live site links.
- **Boarding House System Management** — VB.NET and SQL Server desktop system.
- **Online Ordering & Reservation System for MCA Cafe** — Laravel and MySQL system.
- **Personal Portfolio Website** — HTML, CSS, and JavaScript.
- Additional academic projects built with Java, Python, C#, VB.NET, MS Access, and SQL Server.

Each project card can open a lightbox gallery with screenshots and a description.

## Technologies Used

These are the technologies actually used by the current codebase:

| Technology | Usage |
| --- | --- |
| **HTML5** | Page structure and content in `index.html` |
| **CSS3** | Styling, theming variables, responsive layout, animations in `src/css/app.css` |
| **JavaScript (vanilla)** | Navigation, scrollspy, lightbox, certificate viewer, zoom/pan, file viewer, project toggle in `src/js/app.js` |
| **Vite 8** | Development server and production build |
| **Font Awesome 6.5.2** | Icons, loaded via CDN |
| **Vercel** | Deployment configuration in `vercel.json` |
| **Apache `.htaccess`** | Optional local XAMPP/Apache asset routing |

No front-end framework (React, Vue, etc.), CSS framework, or backend framework is used.

## Project Structure

```text
obias_portfolio/
├── index.html              # Main portfolio page (all sections and modals)
├── src/
│   ├── css/
│   │   └── app.css         # Theme, layout, responsive styles, animations
│   └── js/
│       └── app.js          # Navigation, lightbox, modals, zoom, project toggle
├── public/                 # Static assets served at the site root
│   ├── profile/            # Profile photo and favicon
│   ├── cert_img/           # Certificate images
│   ├── projects/           # Project screenshots
│   ├── files/              # Resume and Personal Data Sheet PDFs
│   ├── LOGO/               # Technology logos
│   └── *.pdf               # Additional certificate/document PDFs
├── dist/                   # Production build output (generated)
├── vite.config.js          # Vite configuration
├── vercel.json             # Vercel deployment configuration
├── package.json            # Scripts and dev dependency (Vite)
└── .htaccess               # Apache rewrite rules for local XAMPP use
```

### Relevant files

- `index.html` — Contains every visible section, the certificate modal, project lightbox, and document viewer markup.
- `src/css/app.css` — Defines the cream/beige/gold color palette, typography, responsive breakpoints, and all component styles.
- `src/js/app.js` — Handles mobile navigation, smooth scrolling, scrollspy, section reveals, certificate slider and viewer, project galleries, resume/PDS viewer, and the "See more projects" toggle.
- `public/` — All images and PDFs referenced by the page. Vite serves this folder at the site root during development and copies it into `dist/` during builds.

## Running the Project Locally

### Prerequisites

- [Node.js](https://nodejs.org/) and npm

### Setup

1. Install dependencies:

   ```bash
   npm install
   ```

2. Start the Vite development server:

   ```bash
   npm run dev
   ```

3. Open the local URL printed by Vite (typically `http://localhost:5173`).

### Production build

```bash
npm run build
```

The optimized site is generated in `dist/`. To preview the production build locally:

```bash
npm run preview
```

### Running with XAMPP/Apache

The included `.htaccess` maps asset folders such as `profile/`, `cert_img/`, `projects/`, `files/`, and `LOGO/` to `public/`. When serving the repository root through Apache (for example, `http://localhost/obias_portfolio/`), these rewrites allow the root `index.html` to load assets from `public/`.

## Deployment

The project is configured for deployment on **Vercel** via `vercel.json`:

- Framework: Vite
- Install command: `npm install`
- Build command: `npm run build`
- Output directory: `dist`

Because the site is fully static, the built `dist/` folder can also be hosted on any static web host or Apache server.

## Notes and Limitations

- The contact form is **front-end only** (`onsubmit="return false;"`). It does not send messages to a server or email service.
- The site uses a single gold accent theme. The CSS includes theme variable hooks, but no light/dark or accent-switching UI is wired up in the current page.
- All portfolio content — bio, education, experience, certificates, and projects — is currently hard-coded in `index.html`.
- To update content, edit `index.html`; to add project or certificate images, place them under the appropriate folder in `public/`.
