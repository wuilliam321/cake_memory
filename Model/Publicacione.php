<?php
App::uses('AppModel', 'Model');
/**
 * Publicacione Model
 *
 * @property Comentario $Comentario
 * @property Recursomultimedia $Recursomultimedia
 * @property Autore $Autore
 * @property Etiqueta $Etiqueta
 */
class Publicacione extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'titulo';
    
    public $actsAs = array('Search.Searchable');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'titulo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contenido' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'publicacione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Recursomultimedia' => array(
			'className' => 'Recursomultimedia',
			'foreignKey' => 'publicacione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Autore' => array(
			'className' => 'Autore',
			'joinTable' => 'autores_publicaciones',
			'foreignKey' => 'publicacione_id',
			'associationForeignKey' => 'autore_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => '',
            'with' => 'AutoresPublicacione'
		),
		'Etiqueta' => array(
			'className' => 'Etiqueta',
			'joinTable' => 'etiquetas_publicaciones',
			'foreignKey' => 'publicacione_id',
			'associationForeignKey' => 'etiqueta_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => '',
            'with' => 'EtiquetasPublicacione'
		)
	);
    
    public $filterArgs = array(
        'q' => array('type' => 'like', 'field' => array('Publicacione.titulo', 'Publicacione.descripcion_corta', 'Publicacione.contenido')),
        //'contenido' => array('type' => 'like'),
        'autor' => array('type' => 'subquery', 'method' => 'findByAutor', 'field' => 'Publicacione.id'),
        'etiqueta' => array('type' => 'subquery', 'method' => 'findByEtiqueta', 'field' => 'Publicacione.id'),
        'filter' => array('type' => 'query', 'method' => 'orConditions'),
    );

    public function findByAutor($data = array()) {
        $this->AutoresPublicacione->Behaviors->attach('Containable', array('autoFields' => false));
        $this->AutoresPublicacione->Behaviors->attach('Search.Searchable');
        $query = $this->AutoresPublicacione->getQuery('all', array(
            'conditions' => array('or' => array('Autore.nombres ILIKE'  => '%' . $data['autor'] . '%', 'Autore.apellidos ILIKE'  => '%' . $data['autor'] . '%', 'Autore.linea_investigacion LIKE'  => '%' . $data['autor'] . '%')),
            'fields' => array('AutoresPublicacione.publicacione_id'),
            'contain' => array('Autore')
        ));
        return $query;
    }

    public function findByEtiqueta($data = array()) {
        $this->EtiquetasPublicacione->Behaviors->attach('Containable', array('autoFields' => false));
        $this->EtiquetasPublicacione->Behaviors->attach('Search.Searchable');
        $query = $this->EtiquetasPublicacione->getQuery('all', array(
            'conditions' => array('Etiqueta.nombre ILIKE'  => '%' . $data['etiqueta'] . '%'),
            'fields' => array('EtiquetasPublicacione.publicacione_id'),
            'contain' => array('Etiqueta')
        ));
        return $query;
    }

    public function orConditions($data = array()) {
        $filter = $data['filter'];
        $cond = array(
            'OR' => array(
                $this->alias . '.titulo LIKE' => '%' . $filter . '%',
                $this->alias . '.contenido LIKE' => '%' . $filter . '%',
            ));
        return $cond;
    }

}
