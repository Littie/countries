<?php

declare(strict_types = 1);

return [
    'index' => [
        'table'   => [
            'headers' => [
                'name'   => 'Name',
                'code'   => 'Code',
                'action' => 'Action',
            ],
        ],
        'buttons' => [
            'create' => 'Create country',
        ],
    ],
    'create' => [
        'header' => 'Create country',
        'form'   => [
            'name'      => 'Country name',
            'code'      => 'Country code',
            'languages' => 'Add languages',
            'buttons'   => [
                'create' => 'Create',
            ],
        ],
    ],
    'edit'   => [
        'header' => 'Edit country',
        'form'   => [
            'name'      => 'Country name',
            'code'      => 'Country code',
            'languages' => 'Change languages',
            'buttons'   => [
                'update' => 'Update',
            ],
        ],
    ],
    'show'   => [
        'city_header'      => 'Cities',
        'languages_header' => 'Languages',
        'empty'            => 'Empty cities',
        'buttons'          => [
            'add'  => 'Add city',
            'back' => 'Back',
        ],
    ],
];
