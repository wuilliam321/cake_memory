<?php
App::uses('AppController', 'Controller');
/**
 * Recursomultimedia Controller
 *
 * @property Recursomultimedia $Recursomultimedia
 */
class RecursomultimediaController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Recursomultimedia->recursive = 0;
		$this->set('recursomultimedia', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recursomultimedia->exists($id)) {
			throw new NotFoundException(__('Invalid recursomultimedia'));
		}
		$options = array('conditions' => array('Recursomultimedia.' . $this->Recursomultimedia->primaryKey => $id));
		$this->set('recursomultimedia', $this->Recursomultimedia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($pubicacione_id = null) {
		if ($this->request->is('post')) {
			$this->Recursomultimedia->create();
			if ($this->Recursomultimedia->save($this->request->data)) {
				$this->Session->setFlash(__('The recursomultimedia has been saved'));
				$this->redirect(array('controller' => 'publicaciones', 'action' => 'edit', $this->request->data['Recursomultimedia']['publicacione_id']));
			} else {
				$this->Session->setFlash(__('The recursomultimedia could not be saved. Please, try again.'));
			}
		}
		$recursomultimediatipos = $this->Recursomultimedia->Recursomultimediatipo->find('list');
		$publicacione = $this->Recursomultimedia->Publicacione->findById($pubicacione_id);
		$this->set(compact('recursomultimediatipos', 'publicacione'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Recursomultimedia->exists($id)) {
			throw new NotFoundException(__('Invalid recursomultimedia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Recursomultimedia->save($this->request->data)) {
				$this->Session->setFlash(__('The recursomultimedia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recursomultimedia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Recursomultimedia.' . $this->Recursomultimedia->primaryKey => $id));
			$this->request->data = $this->Recursomultimedia->find('first', $options);
		}
		$recursomultimediatipos = $this->Recursomultimedia->Recursomultimediatipo->find('list');
		$publicaciones = $this->Recursomultimedia->Publicacione->find('list');
		$this->set(compact('recursomultimediatipos', 'publicaciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Recursomultimedia->id = $id;
		if (!$this->Recursomultimedia->exists()) {
			throw new NotFoundException(__('Invalid recursomultimedia'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Recursomultimedia->delete()) {
			$this->Session->setFlash(__('Recursomultimedia deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recursomultimedia was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
