<?php
App::uses('AppController', 'Controller');
/**
 * Unidadinvestigaciones Controller
 *
 * @property Unidadinvestigacione $Unidadinvestigacione
 */
class UnidadinvestigacionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Unidadinvestigacione->recursive = 0;
		$this->set('unidadinvestigaciones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Unidadinvestigacione->exists($id)) {
			throw new NotFoundException(__('Invalid unidadinvestigacione'));
		}
		$options = array('conditions' => array('Unidadinvestigacione.' . $this->Unidadinvestigacione->primaryKey => $id));
		$this->set('unidadinvestigacione', $this->Unidadinvestigacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Unidadinvestigacione->create();
			if ($this->Unidadinvestigacione->save($this->request->data)) {
				$this->Session->setFlash(__('The unidadinvestigacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidadinvestigacione could not be saved. Please, try again.'));
			}
		}
		$institutos = $this->Unidadinvestigacione->Instituto->find('list');
		$this->set(compact('institutos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Unidadinvestigacione->exists($id)) {
			throw new NotFoundException(__('Invalid unidadinvestigacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Unidadinvestigacione->save($this->request->data)) {
				$this->Session->setFlash(__('The unidadinvestigacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidadinvestigacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Unidadinvestigacione.' . $this->Unidadinvestigacione->primaryKey => $id));
			$this->request->data = $this->Unidadinvestigacione->find('first', $options);
		}
		$institutos = $this->Unidadinvestigacione->Instituto->find('list');
		$this->set(compact('institutos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Unidadinvestigacione->id = $id;
		if (!$this->Unidadinvestigacione->exists()) {
			throw new NotFoundException(__('Invalid unidadinvestigacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Unidadinvestigacione->delete()) {
			$this->Session->setFlash(__('Unidadinvestigacione deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Unidadinvestigacione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
