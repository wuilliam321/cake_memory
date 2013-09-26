<?php
App::uses('AppController', 'Controller');
/**
 * AutoresPublicaciones Controller
 *
 * @property AutoresPublicacione $AutoresPublicacione
 */
class AutoresPublicacionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AutoresPublicacione->recursive = 0;
		$this->set('autoresPublicaciones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AutoresPublicacione->exists($id)) {
			throw new NotFoundException(__('Invalid autores publicacione'));
		}
		$options = array('conditions' => array('AutoresPublicacione.' . $this->AutoresPublicacione->primaryKey => $id));
		$this->set('autoresPublicacione', $this->AutoresPublicacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AutoresPublicacione->create();
			if ($this->AutoresPublicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The autores publicacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The autores publicacione could not be saved. Please, try again.'));
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
		if (!$this->AutoresPublicacione->exists($id)) {
			throw new NotFoundException(__('Invalid autores publicacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AutoresPublicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The autores publicacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The autores publicacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AutoresPublicacione.' . $this->AutoresPublicacione->primaryKey => $id));
			$this->request->data = $this->AutoresPublicacione->find('first', $options);
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
		$this->AutoresPublicacione->id = $id;
		if (!$this->AutoresPublicacione->exists()) {
			throw new NotFoundException(__('Invalid autores publicacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AutoresPublicacione->delete()) {
			$this->Session->setFlash(__('Autores publicacione deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Autores publicacione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
