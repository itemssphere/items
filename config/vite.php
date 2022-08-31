<?php

return [
	// ...
	'configs' => [
		'default' => [
			// ...
		],
		
		// Your new back-office configuration
		'admin' => [
			'entrypoints' => [
				'paths' => 'resources/js/admin.js',
				// ...
			],
			'dev_server' => [
				'url' => env('DEV_SERVER_URL', 'http://localhost:3000'),
				// ...
			],
			'build_path' => 'build/admin',
		],
	],
];