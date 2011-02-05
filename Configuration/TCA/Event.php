<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_rbacexample_domain_model_event'] = array(
	'ctrl' => $TCA['tx_rbacexample_domain_model_event']['ctrl'],
	'interface' => array(
		'showRecordFieldList'	=> 'date,description,place,secretplans',
	),
	'types' => array(
		'1' => array('showitem'	=> 'date,description,place,secretplans'),
	),
	'palettes' => array(
		'1' => array('showitem'	=> ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude'			=> 1,
			'label'				=> 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config'			=> array(
				'type'					=> 'select',
				'foreign_table'			=> 'sys_language',
				'foreign_table_where'	=> 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				),
			)
		),
		'l18n_parent' => array(
			'displayCond'	=> 'FIELD:sys_language_uid:>:0',
			'exclude'		=> 1,
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config'		=> array(
				'type'			=> 'select',
				'items'			=> array(
					array('', 0),
				),
				'foreign_table' => 'tx_rbacexample_domain_model_event',
				'foreign_table_where' => 'AND tx_rbacexample_domain_model_event.uid=###REC_FIELD_l18n_parent### AND tx_rbacexample_domain_model_event.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'		=>array(
				'type'		=>'passthrough',
			)
		),
		't3ver_label' => array(
			'displayCond'	=> 'FIELD:t3ver_label:REQ:true',
			'label'			=> 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config'		=> array(
				'type'		=>'none',
				'cols'		=> 27,
			)
		),
		'hidden' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'	=> array(
				'type'	=> 'check',
			)
		),
		'date' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:rbacexample/Resources/Private/Language/locallang_db.xml:tx_rbacexample_domain_model_event.date',
			'config'	=> array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'description' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:rbacexample/Resources/Private/Language/locallang_db.xml:tx_rbacexample_domain_model_event.description',
			'config'	=> array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			),
		),
		'place' => array(
			'exclude'	=> 1,
			'label'		=> 'LLL:EXT:rbacexample/Resources/Private/Language/locallang_db.xml:tx_rbacexample_domain_model_event.place',
			'config'	=> array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'secretplans' => array(
			'exclude'	=> 0,
			'label'		=> 'LLL:EXT:rbacexample/Resources/Private/Language/locallang_db.xml:tx_rbacexample_domain_model_event.secretplans',
			'config'	=> array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
	),
);
?>