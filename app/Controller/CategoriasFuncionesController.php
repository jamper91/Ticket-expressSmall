<?php
App::uses('AppController', 'Controller');
/**
 * CategoriasFunciones Controller
 *
 * @property CategoriasFuncione $CategoriasFuncione
 * @property PaginatorComponent $Paginator
 */
class CategoriasFuncionesController extends AppController {

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
		$this->CategoriasFuncione->recursive = 0;
		$this->set('categoriasFunciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriasFuncione->exists($id)) {
			throw new NotFoundException(__('Invalid categorias funcione'));
		}
		$options = array('conditions' => array('CategoriasFuncione.' . $this->CategoriasFuncione->primaryKey => $id));
		$this->set('categoriasFuncione', $this->CategoriasFuncione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriasFuncione->create();
			if ($this->CategoriasFuncione->save($this->request->data)) {
				$this->Session->setFlash(__('The categorias funcione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorias funcione could not be saved. Please, try again.'));
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
		if (!$this->CategoriasFuncione->exists($id)) {
			throw new NotFoundException(__('Invalid categorias funcione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriasFuncione->save($this->request->data)) {
				$this->Session->setFlash(__('The categorias funcione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorias funcione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriasFuncione.' . $this->CategoriasFuncione->primaryKey => $id));
			$this->request->data = $this->CategoriasFuncione->find('first', $options);
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
		$this->CategoriasFuncione->id = $id;
		if (!$this->CategoriasFuncione->exists()) {
			throw new NotFoundException(__('Invalid categorias funcione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriasFuncione->delete()) {
			$this->Session->setFlash(__('The categorias funcione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categorias funcione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
