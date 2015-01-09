<?php
include dirname(__FILE__) . '/../SmsBump.php';

function on_send($response) {
	var_dump($response);
}

//Send a message to a single recipient
SmsBump::sendMessage(array(
	'APIKey' => '{API_KEY}',
	'to' => '{recipient_number}',
	'message' => 'Hello from the PHP SDK!',
	'callback' => 'on_send'
));

//Send a message to multiple recipients
SmsBump::sendMessage(array(
	'APIKey' => '{API_KEY}',
	'to' => array('{recipient_number}', '{recipient_number}', '{recipient_number}'),
	'message' => 'Hello from the PHP SDK!',
	'callback' => 'on_send'
));

//Send a voice message. The recipient's phone will ring and the message will be read to them.
SmsBump::sendMessage(array(
	'APIKey' => '{API_KEY}',
	'to' => '{recipient_number}',
	'message' => 'Hello from the PHP SDK!',
	'type' => 'vms',
	'callback' => 'on_send'
));
