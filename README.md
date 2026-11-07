# Jefferson David — Portfolio

Personal portfolio website for presenting my background, skills, education, and selected projects as a BSIT student and aspiring developer.

**Live website:** [jeffersondavid.online](https://jeffersondavid.online)

## Features

- Home page with an introduction and featured projects
- About page with profile information, skills, education, and learning timeline
- Projects page with category filters
- Responsive layout for mobile and desktop screens
- Dark and light themes with the selected preference saved in the browser
- Shared PHP templates and centralized portfolio content
- Static HTML export for deployment to Vercel

## Requirements

- Windows computer
- XAMPP with Apache and PHP (PHP 7.4 or newer recommended)
- A modern web browser
- No database is required to run this portfolio

For static-site deployment, PHP CLI is also needed to generate the `dist/` folder.

## Run locally with XAMPP

1. Install and open XAMPP.
2. Copy or clone this project into XAMPP's `htdocs` directory. For example:
   `C:\xampp\htdocs\Portfolio`
3. In the XAMPP Control Panel, start **Apache**.
4. Open this address in your browser:
   [http://localhost/Portfolio/]

If you use a different folder name, replace `Portfolio` in the local URL with that folder's name. You can edit the PHP, CSS, and JavaScript files and refresh the browser to see changes.

## Software and development tools

- **PHP v.8.2** — server-side templates and static-page generation
- **HTML, CSS, JavaScript** — page structure, responsive styling, and interactive features
- **XAMPP / Apache** — local PHP web server
- **Visual Studio Code** — code editor
- **Git and GitHub** — source control and repository hosting
- **Vercel** — static website deployment
- **Web browser** — local preview and testing

## Project structure

| File or folder              | Purpose                                                                    |
| --------------------------- | -------------------------------------------------------------------------- |
| `index.php`                 | Home page and featured projects                                            |
| `about.php`                 | About, skills, education, and progress timeline                            |
| `projects.php`              | Project listing and category filters                                       |
| `header.php` / `footer.php` | Shared page header, navigation, and footer                                 |
| `card.php`                  | Reusable project card                                                      |
| `data.php`                  | Portfolio details, skills, education, timeline, and project data           |
| `style.css`                 | Responsive layout, components, and theme styles                            |
| `main.js`                   | Theme toggle, mobile navigation, project filtering, and reveal effects     |
| `build.php`                 | Exports the PHP pages and static assets into `dist/`                       |
| `dist/`                     | Generated static site published by Vercel; regenerate after source changes |
| `vercel.json`               | Configures Vercel to serve the `dist/` output                              |
| `*.png`, `*.jpg`            | Logos, profile photos, and project images                                  |

## Build the deployment files

The deployed site is generated as static HTML. From the project root, run:

```powershell
php .\build.php
```

This regenerates `dist/` with the HTML pages and site assets. Commit and push the updated `dist/` along with your source changes so Vercel can publish the latest version. Vercel is configured to use `dist/` as its output directory; no build command is required there.

Run the export after changing a PHP page, `data.php`, or a site asset. The `dist/` files are generated output—make source changes in the root-level files instead.
