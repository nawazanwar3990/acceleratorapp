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
    'resources/theme/js/plugins/bootstrap-timepicker.min.js',
    'resources/theme/js/plugins/jquery-ui.min.js',
    'resources/theme/js/plugins/perfect-scrollbar.jquery.min.js',
    'resources/theme/js/plugins/select2.min.js',
    'resources/theme/js/plugins/dropify.js',
    'resources/theme/js/plugins/print.js',
    'resources/theme/js/plugins/jquery.dataTables.min.js',
    'resources/theme/js/plugins/dataTables.bootstrap5.min.js',
    'resources/theme/js/plugins/dataTables.responsive.js',

    'resources/theme/js/plugins/dataTables.buttons.min.js',
    'resources/theme/js/plugins/jszip.min.js',
    'resources/theme/js/plugins/pdfmake.min.js',
    'resources/theme/js/plugins/vfs_fonts.js',
    'resources/theme/js/plugins/buttons.html5.min.js',
    'resources/theme/js/plugins/buttons.print.min.js',

    'resources/theme/js/plugins/buttons.print.min.js',

    'resources/theme/js/plugins/raphael-min.js',
    'resources/theme/js/plugins/morris.js',
    'resources/theme/js/plugins/jquery.sparkline.min.js',
    'resources/theme/js/waves.js',
    'resources/theme/js/sidebar.js',
    'resources/theme/js/search.js',
    'resources/theme/js/dashboard.js',
    'resources/theme/js/common.js'

], 'public/js/dashboard.min.js');

mix.sass('resources/theme/scss/_website.scss', 'css/website.min.css');
mix.scripts([
    'resources/theme/js/plugins/jquery.min.js',
    'resources/theme/js/plugins/moment.js',
    'resources/theme/js/plugins/bootstrap.bundle.min.js',
    'resources/theme/js/plugins/sweetalert2.min.js',
    'resources/theme/js/plugins/jquery.toast.js',
    'resources/theme/js/plugins/parsley.min.js',
    'resources/theme/js/plugins/bootstrap-datepicker.min.js',
    'resources/theme/js/plugins/bootstrap-timepicker.min.js',
    'resources/theme/js/plugins/jquery-ui.min.js',
    'resources/theme/js/plugins/perfect-scrollbar.jquery.min.js',
    'resources/theme/js/plugins/html2pdf.bundle.min.js',
    'resources/theme/js/plugins/owl.carousel.min.js',
    'resources/theme/js/plugins/select2.min.js',
    'resources/theme/js/plugins/dropify.js',
    'resources/theme/js/plugins/print.js',
    'resources/theme/js/common.js',
], 'public/js/website.min.js');
