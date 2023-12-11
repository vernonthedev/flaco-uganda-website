import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // references to the css files
                'resources/css/bootstrap/bootstrap-grid.css',
                'resources/css/bootstrap/bootstrap-reboot.css',
                'resources/css/css/mixins/_text-hide.css',
                'resources/css/css/bootstrap-reboot.css',
                'resources/css/animate.css',
                'resources/css/aos.css',
                'resources/css/bootstrap-datepicker.css',
                'resources/css/bootstrap.min.css',
                'resources/css/flaticon.css',
                'resources/css/icomoon.css',
                'resources/css/ionicons.min.css',
                'resources/css/jquery.timepicker.css',
                'resources/css/magnific-popup.css',
                'resources/css/open-iconic-bootstrap.min.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/owl.theme.default.min.css',
                'resources/css/style.css',
                'resources/css/ajax-loader.gif',


                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
