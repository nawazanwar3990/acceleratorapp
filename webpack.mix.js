const mix = require('laravel-mix');
mix.sass('resources/theme/scss/_auth.scss', 'css/auth.min.css');

mix.sass('resources/theme/scss/_dashboard.scss', 'css/dashboard.min.css');
mix.scripts([
    'resources/theme/js/plugins/jquery.min.js',
    'resources/theme/js/plugins/moment.js',
    'resources/theme/js/plugins/bootstrap.bundle.min.js',
    'resources/theme/js/plugins/sweetalert2.min.js',
    'resources/theme/js/plugins/jquery.toast.js',
    'resources/theme/js/plugins/parsley.min.js',
    'resources/theme/js/plugins/bootstrap-datepicker.min.js',
    'resources/theme/js/plugins/jquery-ui.min.js',
    'resources/theme/js/plugins/perfect-scrollbar.jquery.min.js',
    'resources/theme/js/plugins/select2.min.js',
    'resources/theme/js/plugins/dropify.js',
    'resources/theme/js/waves.js',
    'resources/theme/js/sidebar.js',
    'resources/theme/js/search.js',
    'resources/theme/js/custom.js'
], 'public/js/dashboard.min.js');

mix.sass('resources/theme/scss/_website.scss', 'css/website.min.css');
mix.scripts([
    'resources/theme/js/plugins/jquery.min.js',
    'resources/theme/js/plugins/moment.js',
    'resources/theme/js/plugins/bootstrap.bundle.min.js',
    'resources/theme/js/plugins/sweetalert2.min.js',
    'resources/theme/js/plugins/jquery.toast.js',
    'resources/theme/js/plugins/bootstrap-datepicker.min.js',
    'resources/theme/js/plugins/perfect-scrollbar.jquery.min.js',
    'resources/theme/js/plugins/owl.carousel.min.js',
    'resources/theme/js/website.js'
], 'public/js/website.min.js');
