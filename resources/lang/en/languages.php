<?php

declare(strict_types = 1);

return [
    'index'  => [
        'table'   => [
            'headers' => [
                'name'   => 'Name',
                'code'   => 'Code',
                'action' => 'Action',
            ],
        ],
        'buttons' => [
            'create' => 'Create language',
        ],
    ],
    'create' => [
        'header' => 'Create language',
        'form'   => [
            'name'    => 'Language name',
            'code'    => 'Language code',
            'buttons' => [
                'create' => 'Create',
            ],
        ],
    ],
    'edit'   => [
        'header' => 'Edit language',
        'form'   => [
            'name'    => 'Language name',
            'code'    => 'Language code',
            'buttons' => [
                'update' => 'Update',
            ],
        ],
    ],
    'check'  => [
        'index' => [
            'header' => 'Check language',
            'form'   => [
                'country' => 'Select country',
            ],
        ],
    ],
];
