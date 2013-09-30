<?php
App::uses('AppController', 'Controller');
/**
 * Otroestudiotipos Controller
 *
 * @property Otroestudiotipo $Otroestudiotipo
 */
class OtroestudiotiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Otroestudiotipo->recursive = 0;
		$this->set('otroestudiotipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Otroestudiotipo->recursive = 2;
		if (!$this->Otroestudiotipo->exists($id)) {
			throw new NotFoundException(__('Invalid otroestudiotipo'));
		}
		$options = array('conditions' => array('Otroestudiotipo.' . $this->Otroestudiotipo->primaryKey => $id));
		$this->set('otroestudiotipo', $this->Otroestudiotipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Otroestudiotipo->create();
			if ($this->Otroestudiotipo->save($this->request->data)) {
				$this->Session->setFlash(__('The otroestudiotipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The otroestudiotipo could not be saved. Please, try again.'));
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
		if (!$this->Otroestudiotipo->exists($id)) {
			throw new NotFoundException(__('Invalid otroestudiotipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Otroestudiotipo->save($this->request->data)) {
				$this->Session->setFlash(__('The otroestudiotipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The otroestudiotipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Otroestudiotipo.' . $this->Otroestudiotipo->primaryKey => $id));
			$this->request->data = $this->Otroestudiotipo->find('first', $options);
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
		$this->Otroestudiotipo->id = $id;
		if (!$this->Otroestudiotipo->exists()) {
			throw new NotFoundException(__('Invalid otroestudiotipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Otroestudiotipo->delete()) {
			$this->Session->setFlash(__('Otroestudiotipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Otroestudiotipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
