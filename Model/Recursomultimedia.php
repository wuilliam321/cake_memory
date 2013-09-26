<?php
App::uses('AppModel', 'Model');
/**
 * Recursomultimedia Model
 *
 * @property Recursomultimediatipo $Recursomultimediatipo
 * @property Publicacione $Publicacione
 */
class Recursomultimedia extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'recursomultimedias';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recursomultimediatipo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'publicacione_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ruta' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Recursomultimediatipo' => array(
			'className' => 'Recursomultimediatipo',
			'foreignKey' => 'recursomultimediatipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Publicacione' => array(
			'className' => 'Publicacione',
			'foreignKey' => 'publicacione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
