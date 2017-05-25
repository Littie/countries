<?php

declare(strict_types = 1);

return [
    'index' => [
        'table' => [
            'headers' => [
                'name' => 'Name',
                'action' => 'Actions',
            ],
        ],
    ],
    'create' => [
        'header' => 'Create city',
        'form' => [
            'name' => 'City name',
            'languages' => 'Add languages',
            'buttons' => [
                'create' => 'Create',
            ],
        ],
    ],
    'edit' => [
        'header' => 'Edit city',
        'form' => [
            'name' => 'City name',
            'languages' => 'Change languages',
            'buttons' => [
                'update' => 'Update',
            ],
        ],
    ],
    'show' => [
        'country_header' => 'Country is',
        'languages_header' => 'Languages',
        'buttons' => [
            'back' => 'Back',
        ],
    ],
];
