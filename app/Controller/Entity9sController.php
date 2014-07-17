<?php
App::uses('AppController', 'Controller');
/**
 * Entity9s Controller
 *
 * @property Entity9 $Entity9
 * @property PaginatorComponent $Paginator
 */
class Entity9sController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Entity9->recursive = 0;
		$this->set('entity9s', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entity9->exists($id)) {
			throw new NotFoundException(__('Invalid entity9'));
		}
		$options = array('conditions' => array('Entity9.' . $this->Entity9->primaryKey => $id));
		$this->set('entity9', $this->Entity9->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entity9->create();
			if ($this->Entity9->save($this->request->data)) {
				$this->Session->setFlash(__('The entity9 has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entity9 could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Entity9->exists($id)) {
			throw new NotFoundException(__('Invalid entity9'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entity9->save($this->request->data)) {
				$this->Session->setFlash(__('The entity9 has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entity9 could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entity9.' . $this->Entity9->primaryKey => $id));
			$this->request->data = $this->Entity9->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Entity9->id = $id;
		if (!$this->Entity9->exists()) {
			throw new NotFoundException(__('Invalid entity9'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entity9->delete()) {
			$this->Session->setFlash(__('The entity9 has been deleted.'));
		} else {
			$this->Session->setFlash(__('The entity9 could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
