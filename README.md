# Murby

**A plain Kirby 3 starterkit on steroids. 🚀** You get a composer based workflow, a modern asset pipeline with Webpack, Sass, Babel, a live reload server, and much more. Murby just wants to help you quickly start developing and maybe saves you a few hours set up time.

> ⚠️ This project template is in an early stage. Feel free to open up issues if you find any or help by submitting PRs.

-   [Features](#features)
-   [Requirements](#requirements)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Deployment](#deployment)
-   [Roadmap](#roadmap)
-   [License](#license)

## Features

-   **Composer** based Kirby workflow for easy updating the core and adding plugins
-   A **webpack** configuration with Sass, Babel, Postcss and autoprefixer, Imagemin and more
-   **Live reloading** when you change anything to your assets like JavaScript or Sass
-   Easy **npm scripts** to start developing in no time and build optimized assets for production
-   A pretty **basic template** scructure with Header, Footer, Treemenu, etc.

## Requirements

Of course you need to fullfil all [Kirby requirements](https://getkirby.com/docs/guide/quickstart#requirements) like PHP 7.1 and a webserver on your machine. If you're on Mac you shouldn't have any problems.

For development purposes this project uses the built-in PHP server. Of course you can also use MAMP, XAMPP, or everything else. You just have to adjust the NPM scripts to fit your environment. Since this starterkit uses the composer based workflow, you need to have that [installed on your machine](https://getcomposer.org/doc/00-intro.md).

Also, for all that frontend stuff like Webpack, Babel and more you need to have Node.js (>= 10.0.0) and NPM (>= 6.0.0) installed on your machine. [Find out more](https://www.npmjs.com/get-npm).

## Installation

1. Just clone this repo:

```bash
git clone git@github.com:FNGR2911/murby.git myproject
```

2. Go into your new project directory:

```bash
cd myproject
```

3. Install kirby and all vendors by:

```bash
composer install
```

4. Install all required NPM packages by:

```bash
npm install
```

5. Run the development script with `npm run start` and register your admin user by visiting `http://localhost:8282/panel`.

## Usage

To start developing (frontend and backend) run:

```bash
npm run start
```

The start script starts Webpack in watch mode, the built-in PHP webserver on `http://localhost:8282` and opens that site in your default browser.

Your source assets are stored in the `/assets` folder.

To build the frontend assets for production run:

```bash
npm run build
```

## Deployment

Deployment is exactly like deploying a normal Kirby project with one exception: Your web servers root should point to the `/web` directory and not the root directory of your project. You should also run `npm run build` to get optimized frontend assets before deploying to production ;)

## Roadmap

-   [ ] Remove all unnecessary files and folders from `/web`
-   [ ] Ideas? Suggestions? Feel free to open PR or Issue!

## License

MIT
