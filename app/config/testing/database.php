<?php

return [

	'default' => 'mysql',

	'connections' => [

		'sqlite' => [
			'driver'   => 'sqlite',
			'database' => ':memory:',
			'prefix'   => '',
		],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'payquad',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
	]

];
