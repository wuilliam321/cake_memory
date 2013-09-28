<?php
App::uses('AppController', 'Controller');
/**
 * Otroestudios Controller
 *
 * @property Otroestudio $Otroestudio
 */
class OtroestudiosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Otroestudio->recursive = 0;
		$this->set('otroestudios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Otroestudio->exists($id)) {
			throw new NotFoundException(__('Invalid otroestudio'));
		}
		$options = array('conditions' => array('Otroestudio.' . $this->Otroestudio->primaryKey => $id));
		$this->set('otroestudio', $this->Otroestudio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($autore_id = null) {
		if (!$autore_id) {
			$this->redirect($this->referer());
		}
		if ($this->request->is('post')) {
			$this->Otroestudio->create();
			if ($this->Otroestudio->save($this->request->data)) {
				$this->Session->setFlash(__('The otroestudio has been saved'));
				$this->redirect(array('controller' => 'autores', 'action' => 'edit', $this->request->data['Otroestudio']['autore_id']));
			} else {
				$this->Session->setFlash(__('The otroestudio could not be saved. Please, try again.'));
			}
		}
		$autore = $this->Otroestudio->Autore->findById($autore_id);
		$otroestudiotipos = $this->Otroestudio->Otroestudiotipo->find('list');
		$this->set(compact('autore', 'otroestudiotipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Otroestudio->exists($id)) {
			throw new NotFoundException(__('Invalid otroestudio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Otroestudio->save($this->request->data)) {
				$this->Session->setFlash(__('The otroestudio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The otroestudio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Otroestudio.' . $this->Otroestudio->primaryKey => $id));
			$this->request->data = $this->Otroestudio->find('first', $options);
		}
		$autore = $this->Otroestudio->Autore->findById($this->request->data['Otroestudio']['autore_id']);
		$otroestudiotipos = $this->Otroestudio->Otroestudiotipo->find('list');
		$this->set(compact('autore', 'otroestudiotipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Otroestudio->id = $id;
		if (!$this->Otroestudio->exists()) {
			throw new NotFoundException(__('Invalid otroestudio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Otroestudio->delete()) {
			$this->Session->setFlash(__('Otroestudio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Otroestudio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
