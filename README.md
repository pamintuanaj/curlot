# Curlot Beauty

A responsive one-page landing website for **Curlot Beauty**, a curly-hair care brand based in Angeles City, Pampanga, Philippines. The site showcases the brand story, product lines (shampoo, conditioner, creams, oils, tools and accessories), blog highlights, and a contact form.

> *"No Hairarchy, Just Natural Beauty."*

## Features

- One-page layout with smooth-scrolling navigation (jQuery `onePageNav`)
- Animated hero section with a countdown timer
- Scroll animations (WOW.js + animate.css)
- About slider (Owl Carousel)
- Product sections: Shampoo, Conditioner, Creams, Oils & Tools
- Contact form with client-side validation and AJAX submission
- Fully responsive (Bootstrap 4 alpha + custom `responsive.css`)
- SCSS source compiled to CSS with Gulp

## Tech Stack

| Area | Tools |
|------|-------|
| Markup | HTML5 |
| Styling | Bootstrap 4.0.0-alpha.5, SCSS, Font Awesome, Themefisher icon font |
| Scripts | jQuery 2.1.1, Owl Carousel, WOW.js, jQuery Validate, jQuery Form |
| Build | Gulp + gulp-sass |
| Backend (contact form) | PHP (`mail.php`) |

## Project Structure

```
curlot/
├── index.html          # Main page
├── mail.php            # Contact form handler (needs a PHP server)
├── gulpfile.js         # Compiles SCSS -> CSS
├── package.json        # Build dependencies
├── css/                # Compiled + vendor CSS
├── scss/               # style.scss, responsive.scss (edit these)
├── js/                 # main.js + plugins
│   ├── vendor/         # jQuery, Modernizr
│   └── min/            # Minified main.js
├── fonts/              # Themefisher icon font
└── img/                # Logos, product images, blog images, cartoons
```

## Getting Started

### Just view it
Open `index.html` in a browser. Bootstrap, Tether and Google Fonts load from a CDN, so you need an internet connection.

### Run locally with a server (needed for the contact form)
```bash
# PHP built-in server
php -S localhost:8000
# then visit http://localhost:8000
```
Or use any static server (`npx serve`, VS Code Live Server). The contact form will only send mail on a server with PHP and mail configured.

### Edit styles
Edit files in `scss/`, then compile:
```bash
npm install
npx gulp styles      # one-off build
npx gulp             # watch scss/ and rebuild on change
```
> The gulpfile uses Gulp 3 syntax, so `package.json` pins Gulp 3 and an older `gulp-sass`. Use an older Node version (e.g. Node 10) via `nvm` if installation fails.

## Configuration

1. **Contact form email**: open `mail.php` and set `$to` to your email address.
2. **Countdown timer**: in `js/main.js`, update `targetDate` (it is currently set to 30 Dec 2018, which has already passed). If you use `js/min/main.min.js`, regenerate it afterwards.
3. **Contact details / footer**: edit the phone, address and Facebook link in `index.html`.

## Known Issues / To-Do

- Error message in `#error` currently says "Your Message was sent successfully"; change it to a failure message in `index.html`.
- Countdown date is in the past.
- Image filenames contain spaces (e.g. `blog 1.jpg`); renaming to hyphens is safer for hosting.
- Bootstrap 4 alpha is outdated; consider upgrading to Bootstrap 5.
- `<section clas="wow fadeInUp">` in `index.html` has a typo (`clas`).
- `doc.txt` files in each folder are placeholders and can be removed.

## Deployment

It's a static site, so it can be hosted on GitHub Pages, Netlify, or Vercel.
For **GitHub Pages**: Settings → Pages → Deploy from branch → `main` / root.
(Contact form requires PHP hosting. On static hosts, swap `mail.php` for a service such as Formspree or Netlify Forms.)

## Credits

- Template base: Themefisher
- Brand, images and content: Curlot Beauty

## License

Released under the MIT License (see `LICENSE`). Brand name, logos and product images remain the property of Curlot Beauty.
