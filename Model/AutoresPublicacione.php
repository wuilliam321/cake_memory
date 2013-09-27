<?php
App::uses('AppModel', 'Model');
/**
 * AutoresPublicacione Model
 *
 * @property Publicacione $Publicacione
 * @property Autore $Autore
 */
class AutoresPublicacione extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Publicacione' => array(
			'className' => 'Publicacione',
			'foreignKey' => 'publicacione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Autore' => array(
			'className' => 'Autore',
			'foreignKey' => 'autore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
