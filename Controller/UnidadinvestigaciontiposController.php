<?php
App::uses('AppController', 'Controller');
/**
 * Unidadinvestigaciontipos Controller
 *
 * @property Unidadinvestigaciontipo $Unidadinvestigaciontipo
 */
class UnidadinvestigaciontiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Unidadinvestigaciontipo->recursive = 0;
		$this->set('unidadinvestigaciontipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Unidadinvestigaciontipo->recursive = 2;
		if (!$this->Unidadinvestigaciontipo->exists($id)) {
			throw new NotFoundException(__('Invalid unidadinvestigaciontipo'));
		}
		$options = array('conditions' => array('Unidadinvestigaciontipo.' . $this->Unidadinvestigaciontipo->primaryKey => $id));
		$this->set('unidadinvestigaciontipo', $this->Unidadinvestigaciontipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Unidadinvestigaciontipo->create();
			if ($this->Unidadinvestigaciontipo->save($this->request->data)) {
				$this->Session->setFlash(__('The unidadinvestigaciontipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidadinvestigaciontipo could not be saved. Please, try again.'));
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
		if (!$this->Unidadinvestigaciontipo->exists($id)) {
			throw new NotFoundException(__('Invalid unidadinvestigaciontipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Unidadinvestigaciontipo->save($this->request->data)) {
				$this->Session->setFlash(__('The unidadinvestigaciontipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidadinvestigaciontipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Unidadinvestigaciontipo.' . $this->Unidadinvestigaciontipo->primaryKey => $id));
			$this->request->data = $this->Unidadinvestigaciontipo->find('first', $options);
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
		$this->Unidadinvestigaciontipo->id = $id;
		if (!$this->Unidadinvestigaciontipo->exists()) {
			throw new NotFoundException(__('Invalid unidadinvestigaciontipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Unidadinvestigaciontipo->delete()) {
			$this->Session->setFlash(__('Unidadinvestigaciontipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Unidadinvestigaciontipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
