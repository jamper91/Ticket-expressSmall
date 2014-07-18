<?php
App::uses('AppModel', 'Model');
/**
 * Categoria Model
 *
 * @property Funcione $Funcione
 */
class Categoria extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Funcione' => array(
			'className' => 'Funcione',
			'joinTable' => 'categorias_funciones',
			'foreignKey' => 'categoria_id',
			'associationForeignKey' => 'funcione_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
        public $belongsTo = array(
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'evento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
