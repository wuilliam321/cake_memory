<?php
App::uses('AppController', 'Controller');
/**
 * Publicaciones Controller
 *
 * @property Publicacione $Publicacione
 */
class PublicacionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Publicacione->recursive = 0;
		$this->set('publicaciones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Publicacione->exists($id)) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		$options = array('conditions' => array('Publicacione.' . $this->Publicacione->primaryKey => $id));
		$this->set('publicacione', $this->Publicacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Publicacione->create();
			if ($this->Publicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The publicacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
			}
		}
		$autores = $this->Publicacione->Autore->find('list');
		$etiquetas = $this->Publicacione->Etiqueta->find('list');
		$this->set(compact('autores', 'etiquetas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Publicacione->exists($id)) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Publicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The publicacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Publicacione.' . $this->Publicacione->primaryKey => $id));
			$this->request->data = $this->Publicacione->find('first', $options);
		}
		$autores = $this->Publicacione->Autore->find('list');
		$etiquetas = $this->Publicacione->Etiqueta->find('list');
		$this->set(compact('autores', 'etiquetas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Publicacione->id = $id;
		if (!$this->Publicacione->exists()) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Publicacione->delete()) {
			$this->Session->setFlash(__('Publicacione deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Publicacione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
