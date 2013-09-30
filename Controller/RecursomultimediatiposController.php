<?php
App::uses('AppController', 'Controller');
/**
 * Recursomultimediatipos Controller
 *
 * @property Recursomultimediatipo $Recursomultimediatipo
 */
class RecursomultimediatiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Recursomultimediatipo->recursive = 0;
		$this->set('recursomultimediatipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Recursomultimediatipo->recursive = 2;
		if (!$this->Recursomultimediatipo->exists($id)) {
			throw new NotFoundException(__('Invalid recursomultimediatipo'));
		}
		$options = array('conditions' => array('Recursomultimediatipo.' . $this->Recursomultimediatipo->primaryKey => $id));
		$this->set('recursomultimediatipo', $this->Recursomultimediatipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Recursomultimediatipo->create();
			if ($this->Recursomultimediatipo->save($this->request->data)) {
				$this->Session->setFlash(__('The recursomultimediatipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recursomultimediatipo could not be saved. Please, try again.'));
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
		if (!$this->Recursomultimediatipo->exists($id)) {
			throw new NotFoundException(__('Invalid recursomultimediatipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Recursomultimediatipo->save($this->request->data)) {
				$this->Session->setFlash(__('The recursomultimediatipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recursomultimediatipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Recursomultimediatipo.' . $this->Recursomultimediatipo->primaryKey => $id));
			$this->request->data = $this->Recursomultimediatipo->find('first', $options);
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
		$this->Recursomultimediatipo->id = $id;
		if (!$this->Recursomultimediatipo->exists()) {
			throw new NotFoundException(__('Invalid recursomultimediatipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Recursomultimediatipo->delete()) {
			$this->Session->setFlash(__('Recursomultimediatipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recursomultimediatipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
