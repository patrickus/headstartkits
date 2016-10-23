Head Start Kits
=====================

How to run it
=============

Requirements: you need a recent version of node, like `v6.7.0`, and Webpack installed
(you can install it with `npm install -g webpack webpack-dev-server`.

And then, run a live server with Webpack hot-reloading of assets:

* Building the server-side react Webpack bundle.
    
    webpack --config webpack.config.serverside.js --watch

* And, In a different terminal/screen/tmux, the hot-reloading webpack server for the client assets:

    webpack-dev-server --progress --colors --config webpack.config.js

* Also, you may want to run the Symfony server:

    bin/console server:start

After this, visit [http://127.0.0.1:8000](http://127.0.0.1:8000).

(If you don't see the images, you may want to run `webpack` alone once, the first time, to copy them to `web/`).


Why Webpack?
===========

Webpack is used to generate two separate JavaScript bundles (that share some code). One is meant for its inclusion
 as context for the server-side rendering. The second will contain your client-side frontend code. Given this,
  we can write Twig code to render React components like, for instance:

    {{ react_component('RecipesApp', {'props': props}) }}

And it will be rendered both client and server-side.

We have provided what we think are sensible defaults for both bundles, and also for the package.json dependencies,
 like Twitter Bootstrap and such. Feel free to adapt them to your needs.

Please note that if you are copying `webpack.config.js` or `webpack.config.server.js` to your project it is very
 likely that you will need also `.babelrc` to have Babel presets (used to transform React JSX and modern
  JavaScript to plain old JavaScript)

Why Server-Side rendering?
==========================

If you enable server-side rendering along with client-side rendering of components (this is the default)
your React components will be rendered directly as HTML by Twig and then, when the client-side code is run,
React will identify the already rendered HTML and it won't render it again until is needed. Instead, it
will silently take control over it and re-render it only when it is needed.

This is vital for some applications for SEO purposes, but also is great for quick page-loads and to provide
the content to users with JavaScript disabled (if there is any left, but it is a nice-to-have).

You can configure ReactBundle to have server-side, client-side or both. See the bundle documentation for
more information.



How it works
============

When you render a React Component in a Twig template with `{{ react_component('RecipesApp', {'props': props}) }}`
 with client and server-side rendering enabled (this is the default setting), ReactBundle will render a `<div>`
 that will serve as container of the component.

Inside of it, the bundle will place all the HTML code that results of evaluating your component. It will do
so by calling `PhpExecJs`, using your server-bundle, generated by Webpack as context, and retrieving the outcome.

When your client-side JavaScript runs, React will find this `<div>` tag and will recognize it as the result
of rendering a component. It won't render it again (unless the evaluation of your client-side code differs),
but it will take control of it, and, depending on the actions performed by the user, it will re-render the
component dynamically.

Configuration for Hot-Reloading
===============================

In the development environment it is nice to have Webpack with hot-reloading. This means that you run a Webpack server
 that serves your assets and, if you change something on them, Webpack makes your server reload the page automatically.
  To run the hot-reloading server run Webpack with:

    webpack-dev-server --progress --colors --config webpack.config.js

This allows us to use the Webpack server when loading assets in Twig, like:

    <link href="{{asset('assets/build/stylesheets/main.css', 'webpack')}}" rel="stylesheet">

or

    <script src="{{ asset('assets/build/client-bundle.js', 'webpack') }}"></script>

And in dev mode Symfony will load these assets from `http://localhost:8080`.


run these first
================
composer install
npm install

this command adds database and tables based on entities
================================================

php bin/console doctrine:schema:update --force
