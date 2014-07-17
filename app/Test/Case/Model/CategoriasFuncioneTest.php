<?php
App::uses('CategoriasFuncione', 'Model');

/**
 * CategoriasFuncione Test Case
 *
 */
class CategoriasFuncioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categorias_funcione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoriasFuncione = ClassRegistry::init('CategoriasFuncione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriasFuncione);

		parent::tearDown();
	}

}
