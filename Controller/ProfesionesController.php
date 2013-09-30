<?php
App::uses('AppController', 'Controller');
/**
 * Profesiones Controller
 *
 * @property Profesione $Profesione
 */
class ProfesionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Profesione->recursive = 0;
		$this->set('profesiones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Profesione->recursive = 2;
		if (!$this->Profesione->exists($id)) {
			throw new NotFoundException(__('Invalid profesione'));
		}
		$options = array('conditions' => array('Profesione.' . $this->Profesione->primaryKey => $id));
		$this->set('profesione', $this->Profesione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profesione->create();
			if ($this->Profesione->save($this->request->data)) {
				$this->Session->setFlash(__('The profesione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesione could not be saved. Please, try again.'));
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
		if (!$this->Profesione->exists($id)) {
			throw new NotFoundException(__('Invalid profesione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Profesione->save($this->request->data)) {
				$this->Session->setFlash(__('The profesione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profesione.' . $this->Profesione->primaryKey => $id));
			$this->request->data = $this->Profesione->find('first', $options);
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
		$this->Profesione->id = $id;
		if (!$this->Profesione->exists()) {
			throw new NotFoundException(__('Invalid profesione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Profesione->delete()) {
			$this->Session->setFlash(__('Profesione deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Profesione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
