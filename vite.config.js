import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //css
                'resources/css/style.css',
                'node_modules/swiper/swiper-bundle.min.css',
                'node_modules/dropzone/dist/dropzone.css',

                //js
                'resources/js/head.js',
                'resources/js/theme.js',
                'resources/js/home.js',
                'resources/js/add.js',
                'resources/js/admin-dashboard.js',
                'resources/js/product-categories.js',
                'resources/js/product-detail.js',
                'resources/js/auth.js',
                'resources/js/wallet.js',
                'resources/js/apps-calendar.js',
                'resources/js/admin-product-add.js',
                'resources/js/admin-customers-list.js',
                'resources/js/admin-shops-detail.js',
                'resources/js/admin-tour.js',
                'resources/js/countdown.js',
                'resources/js/maps-vector.js',
                'resources/js/profile.js',
                'resources/js/swiper.js',
                'resources/js/ui-gallery.js',
                'resources/js/ui-advance-lightbox.js',
                'resources/js/ui-advance-rater.js',
                'resources/js/ui-advance-sweet-alert.js',
                'resources/js/ui-advance-swiper.js',
                'resources/js/ui-advance-tour.js',
                'resources/js/ui-chart-apex.js',
                'resources/js/ui-form-editor.js',
                'resources/js/ui-table-grid.js',
                'resources/js/ui-form-select.js',
                'resources/js/ui-form-range.js',
                'resources/js/ui-form-upload.js',
                'resources/js/ui-form-picker.js',
                'resources/js/ui-form-validation.js'
            ],
            refresh: true,
        }),
    ],
});
