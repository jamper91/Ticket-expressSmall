<?php
App::uses('Funcione', 'Model');

/**
 * Funcione Test Case
 *
 */
class FuncioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.funcione',
		'app.evento',
		'app.tipo',
		'app.venta',
		'app.categoria',
		'app.categorias_funcione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Funcione = ClassRegistry::init('Funcione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Funcione);

		parent::tearDown();
	}

}
