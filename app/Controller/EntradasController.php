<?php

App::uses('AppController', 'Controller');

/**
 * Entradas Controller
 *
 * @property Entrada $Entrada
 * @property PaginatorComponent $Paginator
 */
class EntradasController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Auth');

    /**
     * index method
     *
     * @return void
     */


    public function index() {
        $this->Entrada->recursive = 0;
        $this->set('entradas', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Entrada->exists($id)) {
            throw new NotFoundException(__('Invalid entrada'));
        }
        $options = array('conditions' => array('Entrada.' . $this->Entrada->primaryKey => $id));
        $this->set('entrada', $this->Entrada->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Entrada->create();
            if ($this->Entrada->save($this->request->data)) {
                $this->Session->setFlash(__('The entrada has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The entrada could not be saved. Please, try again.'));
            }
        }
    }

    public function comprar($idEvento) {
        if ($this->request->is('post')) {
            $this->Entrada->create();
            if ($this->Entrada->save($this->request->data)) {
                $this->Session->setFlash(__('The entrada has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The entrada could not be saved. Please, try again.'));
            }
        }
        $options = array(
            "conditions" => array(
                'Categoria.evento_id' => $idEvento
            ),
            "recursive" => -1
        );
        $this->loadModel('Categoria');
        $categorias = $this->Categoria->find("all", $options);
        $this->set(compact('categorias'));
        $options = array(
            "conditions" => array(
                'Evento.id' => $idEvento
            ),
            "recursive" => -1
        );
        $this->loadModel('Evento');
        $evento = $this->Evento->find("first", $options);

        $this->set(compact('evento'));
        $this->set("UserId", $this->Session->read('User.id'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Entrada->exists($id)) {
            throw new NotFoundException(__('Invalid entrada'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Entrada->save($this->request->data)) {
                $this->Session->setFlash(__('The entrada has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The entrada could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Entrada.' . $this->Entrada->primaryKey => $id));
            $this->request->data = $this->Entrada->find('first', $options);
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
        $this->Entrada->id = $id;
        if (!$this->Entrada->exists()) {
            throw new NotFoundException(__('Invalid entrada'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Entrada->delete()) {
            $this->Session->setFlash(__('The entrada has been deleted.'));
        } else {
            $this->Session->setFlash(__('The entrada could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
