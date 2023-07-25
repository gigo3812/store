const mix = require('laravel-mix');

/** ---------------------------------------Start FrontEnd --------------------------------------- */
/** layout */
mix.js("resources/js/app.js", "public/js").vue();
mix.sass("resources/scss/front/layout.scss", "public/css/front");

/** index */
mix.sass("resources/scss/front/index.scss", "public/css/front");

/** --------------------- Start Product -------------------- */
/** browse */
mix.sass("resources/scss/front/browse.scss", "public/css/front");

/** read */
mix.sass("resources/scss/front/read.scss", "public/css/front");
/** --------------------- End Product -------------------- */

/** --------------------- Start Cart -------------------- */
/** index */
mix.sass("resources/scss/front/cart.scss", "public/css/front");
/** --------------------- End Cart -------------------- */

/** --------------------- Start login -------------------- */
/** login and register */
mix.js("resources/js/login.js", "public/js").vue();
mix.sass("resources/scss/front/login.scss", "public/css/front");
/** --------------------- End login -------------------- */

/** ---------------------------------------End FrontEnd --------------------------------------- */
