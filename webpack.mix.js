const mix = require('laravel-mix');
/*dashboard mixin*/
mix.sass('resources/theme/scss/_auth.scss', 'css/auth.min.css');
mix.sass('resources/theme/scss/_dashboard.scss', 'css/dashboard.min.css');
