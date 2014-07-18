<?php
App::uses('AppModel', 'Model');
/**
 * Funcione Model
 *
 * @property Evento $Evento
 * @property Venta $Venta
 * @property Categoria $Categoria
 */
class Funcione extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'evento_id' => array(
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
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'evento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Venta' => array(
			'className' => 'Venta',
			'foreignKey' => 'funcione_id',
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
//	public $hasAndBelongsToMany = array(
//		'Categoria' => array(
//			'className' => 'Categoria',
//			'joinTable' => 'categorias_funciones',
//			'foreignKey' => 'funcione_id',
//			'associationForeignKey' => 'categoria_id',
//			'unique' => 'keepExisting',
//			'conditions' => '',
//			'fields' => '',
//			'order' => '',
//			'limit' => '',
//			'offset' => '',
//			'finderQuery' => '',
//		)
//	);

}
