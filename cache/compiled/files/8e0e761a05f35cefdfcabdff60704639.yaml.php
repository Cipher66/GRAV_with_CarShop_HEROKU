<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/car-shop/blueprints.yaml',
    'modified' => 1523556319,
    'data' => [
        'name' => 'Car Shop',
        'version' => '0.1.0',
        'description' => 'A theme for those who want to build a website related to car shopping',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Sergio Chavez',
            'email' => 'schavezfe16dw@ikzubirimanteo.com'
        ],
        'homepage' => 'https://github.com/sergio-chavez/grav-theme-car-shop',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/sergio-chavez/grav-theme-car-shop/issues',
        'readme' => 'https://github.com/sergio-chavez/grav-theme-car-shop/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
