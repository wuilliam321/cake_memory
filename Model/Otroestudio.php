<?php
App::uses('AppModel', 'Model');
/**
 * Otroestudio Model
 *
 * @property Autore $Autore
 * @property Otroestudiotipo $Otroestudiotipo
 */
class Otroestudio extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'autore_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'otroestudiotipo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Autore' => array(
			'className' => 'Autore',
			'foreignKey' => 'autore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Otroestudiotipo' => array(
			'className' => 'Otroestudiotipo',
			'foreignKey' => 'otroestudiotipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
