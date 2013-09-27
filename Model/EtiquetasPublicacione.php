<?php
App::uses('AppModel', 'Model');
/**
 * EtiquetasPublicacione Model
 *
 * @property Etiqueta $Etiqueta
 * @property Publicacione $Publicacione
 */
class EtiquetasPublicacione extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'etiqueta_id' => array(
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Etiqueta' => array(
			'className' => 'Etiqueta',
			'foreignKey' => 'etiqueta_id',
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
