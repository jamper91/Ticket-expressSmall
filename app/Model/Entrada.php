<?php
App::uses('AppModel', 'Model');
/**
 * Entrada Model
 *
 */
class Entrada extends AppModel 
{
    public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
