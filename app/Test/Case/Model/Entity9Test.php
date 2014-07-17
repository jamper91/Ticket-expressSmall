<?php
App::uses('Entity9', 'Model');

/**
 * Entity9 Test Case
 *
 */
class Entity9Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entity9'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Entity9 = ClassRegistry::init('Entity9');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entity9);

		parent::tearDown();
	}

}
