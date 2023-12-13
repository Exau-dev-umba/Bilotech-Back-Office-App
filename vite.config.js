import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'node_modules/admin-lte/plugins/jquery/jquery.min.js',
                
                'node_modules/admin-lte/plugins/select2/js/select2.full.min.js',
                'node_modules/admin-lte/plugins/bs-stepper/js/bs-stepper.min.js',
                'node_modules/admin-lte/plugins/bs-stepper/css/bs-stepper.min.css',
                'node_modules/admin-lte/plugins/select2/js/select2.full.min.js',
                'node_modules/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
                'node_modules/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
                'node_modules/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
                'node_modules/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
                'node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js',
                'node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
                'node_modules/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js',
                'node_modules/admin-lte/plugins/select2/css/select2.min.css',
                'node_modules/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
                'node_modules/admin-lte/dist/js/demo.js',
                'node_modules/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js',
                'node_modules/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js',
                'node_modules/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js',
                'node_modules/admin-lte/plugins/pdfmake/vfs_fonts.js',
                'node_modules/admin-lte/plugins/jszip/jszip.min.js',
                'node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js',
                'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
                'node_modules/admin-lte/plugins/chart.js/Chart.min.js',
                'node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js',
                'node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
               
  
        ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: [
            {
                // this is required for the SCSS modules
                find: /^~(.*)$/,
                replacement: '$1',
            },
        ],
    },
});
