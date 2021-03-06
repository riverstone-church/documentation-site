<?php

return [
    'production' => false,
    'baseUrl' => 'https://docs.riverstonechurch.net',
    'title' => 'Guides and Documentation',
    'description' => 'Information on the various technologies throughout RiverStone Church.',
    'collections' => [
        'guides' => [
            'path' => 'guides/{filename}',
        ],
        'docs' => [
            'path' => 'docs/{filename}',
        ],
        'serviceBulletins' => [
            'path' => 'service-bulletins/{filename}',
            'extends' => '_layouts.doc',
            'sort' => '-date'
        ]
    ],
];
