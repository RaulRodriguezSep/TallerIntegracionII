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
                'document/save' => ['access' => 'public'],
        ],
        'routes' => [
                'view:object:document' => [
                        'path' => '/editor/view/{guid}/{title?}',
                        'resource' => 'document/view',
                ],
                'add:object:document' => [
                        'path' => '/editor/add/{guid?}',
                        'resource' => 'document/add',
                ],
                'edit:object:document' => [
                        'path' => '/editor/edit/{guid}/{revision?}',
                        'resource' => 'document/edit',
                        'requirements' => [
                                'revision' => '\d+',
                        ],
                ],
				'export:object:document' => [
                        'path' => '/editor/export/{guid?}',
                        'resource' => 'document/export',
                ],
				'collection:object:document:all' => [
					'path' => '/editor/all',
					'resource' => 'document/all',
				],
		],
];