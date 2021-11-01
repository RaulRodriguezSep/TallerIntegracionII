<?php

return [
        'entities' => [
            [
                'type' => 'object',
                'subtype' => 'document',
                'searchable' => true,
            ],
        ],
        'actions' => [
                'document/save' => [],
        ],
        'routes' => [
                'view:object:document' => [
                        'path' => '/pruebasRaul/view/{guid}/{title?}',
                        'resource' => 'document/view',
                ],
                'export:object:document' => [
                        'path' => '/pruebasRaul/export/{guid?}',
                        'resource' => 'document/export',
                ],
                'edit:object:document' => [
                        'path' => '/ruebasRaul/edit/{guid}/{revision?}',
                        'resource' => 'document/edit',
                        'requirements' => [
                                'revision' => '\d+',
                        ],
                ],
		'collection:object:document:all' => [
			'path' => '/pruebasRaul/all',
			'resource' => 'document/all',

		],
	],
];