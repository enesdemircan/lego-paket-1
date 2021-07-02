<?php
	
	return [
		'driver' => "smtp",
		'host' => env('MAIL_HOST'), // fill in according to your mail service provider
		'port' => "465",
		'encryption' => "ssl", // Same as above usually tls or ssl
		'username' => env('MAIL_USERNAME'), // your smtp service account
		'password' => env('MAIL_PASSWORD'), //the password of your smtp service
		'from' => [
			'address' => env('MAIL_FROM_ADDRESS'), //the source email address displayed by the recipient's email
			'name' => env('MAIL_FROM_NAME'), //The source name displayed in the recipient's mailbox
		],
	];