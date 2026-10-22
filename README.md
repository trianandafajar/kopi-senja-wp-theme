# Kopi Senja

**A warm WordPress theme for a specialty coffee shop & roastery, built with Blade, Tailwind CSS and Vite.**

> *Secangkir hangat untuk menutup hari.* Kopi Senja ("coffee at dusk") is a theme for a fictional Indonesian specialty coffee shop with a small roastery in the back. All site copy is in Bahasa Indonesia.

Kopi Senja is a derivative of [Sage](https://github.com/roots/sage) by Roots. It keeps Sage's developer workflow (Blade templating, Acorn, Vite, Tailwind CSS 4) and adds its own visual identity, layout and content.

> **Note:** Kopi Senja is not a real business. The address, phone number, email, prices and testimonials in the theme are placeholders. Replace them before you use the theme for a real site.

## Features

- **Landing-style front page** (`front-page.blade.php`) made of separate sections:
  - **Hero:** large Fraunces headline, calls to action, quick facts and an SVG sunset-and-cup illustration with a "sangrai minggu ini" (roast of the week) card.
  - **Menu Andalan:** six featured drinks and snacks in reusable `<x-menu-card>` components with Rupiah pricing, plus a panel of roasted beans to take home.
  - **Tentang Kami:** the shop's story on a dark espresso band, with a numbered *memilih → menyangrai → menyeduh* (choose, roast, brew) process.
  - **Testimoni (contoh):** sample testimonials labelled on the page as placeholders, not real reviews.
  - **Kunjungi Kami:** opening hours, address, contact details and a stylised SVG map (no third-party embed).
- **Sticky header** with an SVG logo mark, styled navigation, a reservation button and an accessible mobile menu.
- **Four-column footer** with hours, contact, a footer menu location, the optional footer widget area and a credit line for Sage.
- **Journal (blog) styling:** post card grid, editorial single-post header, long-form typography, comments, search and a friendly 404 page.
- **Self-hosted variable fonts** (Fraunces + Plus Jakarta Sans) bundled through Vite with Fontsource. No requests go to Google Fonts.
- **Block editor integration:** the brand palette, font stacks and global styles are written into the generated `theme.json`.

## Design tokens

All tokens live in [`resources/css/theme.css`](resources/css/theme.css). The front end and the block editor both import this file.

| Token | Value | Use |
| --- | --- | --- |
| `espresso-900` / `950` | `#2b1b14` / `#1c120d` | Text, dark sections, footer |
| `cream-50` / `100` / `200` | `#fdf9f3` / `#f8f0e3` / `#efe1c9` | Backgrounds and surfaces |
| `terracotta-500` / `600` | `#c8623f` / `#a94d2f` | Accent, buttons, links |
| `karamel` | `#d9a35b` | Highlights, sunset gradient |
| `daun` | `#6f7d4f` | Success states |
| `font-display` / `font-serif` | Fraunces Variable | Headings |
| `font-sans` | Plus Jakarta Sans Variable | Body text and UI |

The Tailwind default palette is switched off (`--color-*: initial`), so the editor only offers brand colours.

## What changed compared to Sage

| Area | Changes |
| --- | --- |
| Metadata | Theme name, description, author, version 1.0.0 and text domain `kopi-senja` (`style.css`, `composer.json`, `package.json`) |
| Theme & typography | `resources/css/theme.css`, `app.css`, `editor.css`, `theme.json` global styles, font labels in `vite.config.js` |
| Layout | `layouts/app`, `sections/header`, `sections/footer`, new `footer_navigation` menu location |
| Home page | `front-page.blade.php`, `sections/home/*`, `App\View\Composers\FrontPage` |
| Components | `x-logo`, `x-icon`, `x-menu-card`, restyled `x-alert` |
| Content templates | index, single, page, search, 404, comments, search form, all with Indonesian copy |
| Behaviour | `resources/js/app.js`: mobile navigation toggle |
| CI | Removed the upstream Discourse announcement workflow and added a check for the brand tokens in `theme.json` |

## Requirements

- WordPress 6.6+
- PHP 8.3+ and [Composer](https://getcomposer.org/)
- Node.js 20.19+ or 22.12+

## Installation

1. Clone or copy this repository into your themes directory and name the folder `kopi-senja`:

   ```sh
   # Bedrock: web/app/themes/kopi-senja
   # Standard WordPress: wp-content/themes/kopi-senja
   git clone <your-fork-url> kopi-senja
   cd kopi-senja
   ```

2. Install the PHP dependencies (this includes [Acorn](https://roots.io/acorn/)):

   ```sh
   composer install
   ```

3. Install the front-end dependencies and build the assets:

   ```sh
   npm install
   npm run build
   ```

4. Activate **Kopi Senja** under *Appearance → Themes*.

5. Optional setup:
   - Assign menus to **Navigasi Utama** and **Navigasi Footer**. Until you do, both fall back to anchor links for the home page sections (`#menu`, `#tentang`, `#kunjungi`).
   - Under *Settings → Reading*, pick a page for posts. It appears in the header as "Jurnal".

### Asset base path

`vite.config.js` uses `base: '/app/themes/kopi-senja/public/build/'`, which matches a Bedrock install. If you install somewhere else, or rename the folder, change `base` to match, for example `/wp-content/themes/kopi-senja/public/build/`.

## Development

```sh
npm run dev     # Vite dev server with hot reload (set APP_URL in .env to your local site)
npm run build   # Production build into public/build (git-ignored)
```

### Where to edit content

The home page copy, menu items, beans, process steps and sample testimonials live in [`app/View/Composers/FrontPage.php`](app/View/Composers/FrontPage.php). Shared shop details (address, phone, email, opening hours) live in [`app/View/Composers/App.php`](app/View/Composers/App.php). Each home page section is a separate Blade partial in [`resources/views/sections/home`](resources/views/sections/home), so you can reorder or remove sections in `front-page.blade.php`.

If the front page is a static page with content, that content is shown below the sections.

### Translations

All strings use the `kopi-senja` text domain, and the source strings are in Bahasa Indonesia. To generate a POT file with WP-CLI:

```sh
npm run translate:pot
```

## Credits / Attribution

Kopi Senja is based on **[Sage](https://github.com/roots/sage)** by **[Roots](https://roots.io/)**, an open source WordPress starter theme. The Blade, Acorn and Vite setup, the theme bootstrapping in `functions.php` and `app/`, and the base template structure all come from Sage. The full upstream commit history is kept in this repository.

Sage is released under the **MIT License**, Copyright (c) Roots Software LLC. The original licence text is kept unchanged in [`LICENSE.md`](LICENSE.md), and Kopi Senja is distributed under the same MIT License.

Other open source work used:

- [Fraunces](https://github.com/undercasetype/Fraunces) by Undercase Type and [Plus Jakarta Sans](https://github.com/tokotype/PlusJakartaSans) by Tokotype, both under the SIL Open Font License 1.1, packaged by [Fontsource](https://fontsource.org/)
- [Tailwind CSS](https://tailwindcss.com/), [Vite](https://vite.dev/), [Acorn](https://github.com/roots/acorn) and [`@roots/vite-plugin`](https://github.com/roots/vite-plugin)

If you find Sage useful, consider [sponsoring Roots](https://github.com/sponsors/roots).

## License

[MIT](LICENSE.md)
