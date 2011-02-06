<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Event',
	array(
		'Event' => 'list, show, new,create',
	),
	array(
		'Event' => 'create',
	)
);

?>