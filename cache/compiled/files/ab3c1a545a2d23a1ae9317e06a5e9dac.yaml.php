<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/plugins/user-information-plugin/blueprints.yaml',
    'modified' => 1523636654,
    'data' => [
        'name' => 'User Information Plugin',
        'version' => '0.1.0',
        'description' => 'Provides information the client about its computer',
        'icon' => 'plug',
        'author' => [
            'name' => 'Sergio Chavez',
            'email' => 'schavezfe16dw@ikzubirimanteo.com'
        ],
        'homepage' => 'https://github.com/sergio-chavez/grav-plugin-user-information-plugin',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, etc',
        'bugs' => 'https://github.com/sergio-chavez/grav-plugin-user-information-plugin/issues',
        'docs' => 'https://github.com/sergio-chavez/grav-plugin-user-information-plugin/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'text_var' => [
                    'type' => 'text',
                    'label' => 'Text Variable',
                    'help' => 'Text to add to the top of a page'
                ]
            ]
        ]
    ]
];
