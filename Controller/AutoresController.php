<?php
App::uses('AppController', 'Controller');
/**
 * Autores Controller
 *
 * @property Autore $Autore
 */
class AutoresController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Autore->recursive = 0;
		$this->set('autores', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Autore->exists($id)) {
			throw new NotFoundException(__('Invalid autore'));
		}
		$options = array('conditions' => array('Autore.' . $this->Autore->primaryKey => $id));
		$this->set('autore', $this->Autore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Autore->create();
			if ($this->Autore->save($this->request->data)) {
				$this->Session->setFlash(__('The autore has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The autore could not be saved. Please, try again.'));
			}
		}
		$users = $this->Autore->User->find('list');
		$unidadinvestigaciones = $this->Autore->Unidadinvestigacione->find('list');
		$profesiones = $this->Autore->Profesione->find('list');
		$publicaciones = $this->Autore->Publicacione->find('list');
		$this->set(compact('users', 'unidadinvestigaciones', 'profesiones', 'publicaciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Autore->exists($id)) {
			throw new NotFoundException(__('Invalid autore'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Autore->save($this->request->data)) {
				$this->Session->setFlash(__('The autore has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The autore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Autore.' . $this->Autore->primaryKey => $id));
			$this->request->data = $this->Autore->find('first', $options);
		}
		$users = $this->Autore->User->find('list');
		$unidadinvestigaciones = $this->Autore->Unidadinvestigacione->find('list');
		$profesiones = $this->Autore->Profesione->find('list');
		$publicaciones = $this->Autore->Publicacione->find('list');
		$this->set(compact('users', 'unidadinvestigaciones', 'profesiones', 'publicaciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Autore->id = $id;
		if (!$this->Autore->exists()) {
			throw new NotFoundException(__('Invalid autore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Autore->delete()) {
			$this->Session->setFlash(__('Autore deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Autore was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
