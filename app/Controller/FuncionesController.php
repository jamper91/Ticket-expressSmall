<?php
App::uses('AppController', 'Controller');
/**
 * Funciones Controller
 *
 * @property Funcione $Funcione
 * @property PaginatorComponent $Paginator
 */
class FuncionesController extends AppController {

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
		$this->Funcione->recursive = 0;
		$this->set('funciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Funcione->exists($id)) {
			throw new NotFoundException(__('Invalid funcione'));
		}
		$options = array('conditions' => array('Funcione.' . $this->Funcione->primaryKey => $id));
		$this->set('funcione', $this->Funcione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Funcione->create();
			if ($this->Funcione->save($this->request->data)) {
				$this->Session->setFlash(__('The funcione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcione could not be saved. Please, try again.'));
			}
		}
		$eventos = $this->Funcione->Evento->find('list');
		$categorias = $this->Funcione->Categorium->find('list');
		$this->set(compact('eventos', 'categorias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Funcione->exists($id)) {
			throw new NotFoundException(__('Invalid funcione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Funcione->save($this->request->data)) {
				$this->Session->setFlash(__('The funcione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Funcione.' . $this->Funcione->primaryKey => $id));
			$this->request->data = $this->Funcione->find('first', $options);
		}
		$eventos = $this->Funcione->Evento->find('list');
		$categorias = $this->Funcione->Categorium->find('list');
		$this->set(compact('eventos', 'categorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Funcione->id = $id;
		if (!$this->Funcione->exists()) {
			throw new NotFoundException(__('Invalid funcione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Funcione->delete()) {
			$this->Session->setFlash(__('The funcione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The funcione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
