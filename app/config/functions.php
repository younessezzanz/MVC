<?php

return [

    'templates' => [
        'wrapperstart'                  => TEMPLATES_PATH . 'header' . DS . 'wrapper' . DS . 'wrapperstart.php',
        'topbar'                        => TEMPLATES_PATH . 'header' . DS . 'topbar' . DS . 'topbar.php',
        'navigation'                    => TEMPLATES_PATH . 'header' . DS . 'menu' . DS . 'navigation.php',
        ':view'                         => ':action_view',
        'wrapperend'                    => TEMPLATES_PATH . 'header' . DS . 'wrapper' . DS . 'wrapperend.php',
    ],

    'header_resources' => [

        'css' => [
            'bootstrap'                 => CSS . 'bootstrap.css',
            'animate'                   => CSS . 'animate.css',
            'fontawesome'               => CSS . 'font-awesome.min.css',
            'icon'                      => CSS . 'icon.css',
            'font'                      => CSS . 'font.css',
            'app'                       => CSS . 'app.css',
            'main'                      => CSS . 'main.css',
            'bootstrap_calendar_css'    => JS . 'calendar/bootstrap_calendar.css',
            'datatables_css'            => JS . 'datatables/datatables.css',
        ],
        
        'js' => [         
        ]

    ],

    'footer_resources' => [

        'js' => [
            'jquery'                    => JS . 'jquery.min.js',
            'bootstrap'                 => JS . 'bootstrap.js',
            'app'                       => JS . 'app.js',
            'datatables_js'             => JS . 'datatables/jquery.dataTables.min.js',
            'datatables_csv'            => JS . 'datatables/jquery.csv-0.71.min.js',
            'slimscroll'                => JS . 'slimscroll/jquery.slimscroll.min.js',
            'easypiechart'              => JS . 'charts/easypiechart/jquery.easy-pie-chart.js',
            'charts_sparkline'          => JS . 'charts/sparkline/jquery.sparkline.min.js',
            'charts_flot'               => JS . 'charts/flot/jquery.flot.min.js',
            'charts_flot_tooltip'       => JS . 'charts/flot/jquery.flot.tooltip.min.js',
            'charts_flot_spline'        => JS . 'charts/flot/jquery.flot.spline.js',
            'charts_flot_pie'           => JS . 'charts/flot/jquery.flot.pie.min.js',
            'charts_flot_resize'        => JS . 'charts/flot/jquery.flot.resize.js',
            'charts_flot_grow'          => JS . 'charts/flot/jquery.flot.grow.js',
            'charts_flot_demo'          => JS . 'charts/flot/demo.js',
            'bootstrap_calendar_js'     => JS . 'calendar/bootstrap_calendar.js',
            'bootstrap_calendar_demo'   => JS . 'calendar/demo.js',
            'sortable'                  => JS . 'sortable/jquery.sortable.js',
            'parsley'                  => JS . 'parsley/parsley.min.js',
            'parsley_extend'                  => JS . 'parsley/parsley.extend.js',
            'plugin'                    => JS . 'app.plugin.js',
            'main_js'                   => JS . 'main.js'
        ]

    ]

];
