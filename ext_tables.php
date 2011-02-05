<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');


Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Event',
	'Events Management'
);

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_event'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_event', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_event.xml');





t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'rbacexample');




t3lib_extMgm::addLLrefForTCAdescr('tx_rbacexample_domain_model_event', 'EXT:rbacexample/Resources/Private/Language/locallang_csh_tx_rbacexample_domain_model_event.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_rbacexample_domain_model_event');
$TCA['tx_rbacexample_domain_model_event'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:rbacexample/Resources/Private/Language/locallang_db.xml:tx_rbacexample_domain_model_event',
		'label' 			=> 'date',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Event.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_rbacexample_domain_model_event.gif'
	)
);


?>