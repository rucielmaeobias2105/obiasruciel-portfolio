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

## Project Structure

```text
obias_portfolio/
├── index.html                    # Generated static page (Vite entry + Vercel output source)
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php     # HTML shell, head, layout, includes
│       ├── partials/             # Navbar, hero, about, education, certificates,
│       │                         # experience, projects, contact, footer, modals
│       └── portfolio.blade.php   # Page view that extends the layout
├── scripts/
│   └── render.php                # Compiles Blade views into index.html
├── src/
│   ├── css/app.css               # Theme, layout, responsive styles, animations
│   └── js/app.js                 # Navigation, lightbox, modals, zoom, project toggle
├── public/                       # Static assets copied to the site root
│   ├── profile/                  # Profile photo and favicon
│   ├── cert_img/                 # Certificate images
│   ├── projects/                 # Project screenshots
│   ├── files/                    # Resume and Personal Data Sheet PDFs
│   └── LOGO/                     # Technology logos
├── dist/                         # Production build output (generated)
├── composer.json                 # Standalone Blade dependency and render script
├── vite.config.js                # Vite configuration
└── vercel.json                   # Vercel deployment configuration
```

## Running the Project Locally

### Prerequisites

- PHP 8.1 or newer
- Composer
- Node.js and npm

### Setup

1. Install the Blade dependency:

   ```bash
   composer install
   ```

2. Render the Blade templates into `index.html`:

   ```bash
   composer render
   ```

   Or directly:

   ```bash
   php scripts/render.php
   ```

3. Install front-end dependencies:

   ```bash
   npm install
   ```

4. Start the Vite development server:

   ```bash
   npm run dev
   ```

5. Open the local URL printed by Vite (typically `http://localhost:5173`).

### Editing templates

The source of truth is `resources/views/`. After changing the layout or any partial:

```bash
composer render
```

This regenerates `index.html`. Then reload Vite or rebuild.

### Production build

```bash
npm run build
```

Or render Blade and build in one step:

```bash
npm run build:blade
```

The optimized site is generated in `dist/`. To preview the production build locally:

```bash
npm run preview
```

### Running with XAMPP/Apache

The included `.htaccess` maps asset folders such as `profile/`, `cert_img/`, `projects/`, `files/`, and `LOGO/` to `public/`. When serving the repository root through Apache (for example, `http://localhost/obias_portfolio/`), these rewrites allow the root `index.html` to load assets from `public/`.

## Deployment

The project is deployed on **Vercel** as a static site via `vercel.json`:

- Framework: Vite
- Install command: `npm install`
- Build command: `npm run build`
- Output directory: `dist`

Because Vercel does not run PHP for this project, the Blade templates are pre-rendered locally and the resulting `index.html` is committed. Run `composer render` before committing template changes so Vercel builds the latest content. `.vercelignore` excludes the PHP sources and dependencies from the deployment bundle.

## Notes and Limitations

- The contact form is **front-end only** (`onsubmit="return false;"`). It does not send messages to a server or email service.
- The site uses a single gold accent theme. The CSS includes theme variable hooks, but no light/dark or accent-switching UI is wired up in the current page.
- Portfolio content — bio, education, experience, certificates, and projects — is authored in the Blade partials under `resources/views/partials/`.
- To add project or certificate images, place them under the appropriate folder in `public/`.
