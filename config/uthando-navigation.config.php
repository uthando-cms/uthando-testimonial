<?php

return [
    'navigation' => [
        'admin' => [
            'testimonial' => [
                'label' => 'Testimonials',
                'pages' => [
                    'list' => [
                        'label'     => 'List All Testimonials',
                        'action'    => 'list',
                        'route'     => 'admin/testimonial',
                        'resource'  => 'menu:user'
                    ],
                    'add' => [
                        'label'     => 'Add New Testimonial',
                        'action'    => 'add',
                        'route'     => 'admin/testimonial/edit',
                        'resource'  => 'menu:user'
                    ],
                ],
                'route' => 'admin/testimonial',
                'resource' => 'menu:user'
            ],
        ],
    ],
];
