<?php
App::uses('AppController', 'Controller');
/**
 * EtiquetasPublicaciones Controller
 *
 * @property EtiquetasPublicacione $EtiquetasPublicacione
 */
class EtiquetasPublicacionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EtiquetasPublicacione->recursive = 0;
		$this->set('etiquetasPublicaciones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EtiquetasPublicacione->exists($id)) {
			throw new NotFoundException(__('Invalid etiquetas publicacione'));
		}
		$options = array('conditions' => array('EtiquetasPublicacione.' . $this->EtiquetasPublicacione->primaryKey => $id));
		$this->set('etiquetasPublicacione', $this->EtiquetasPublicacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EtiquetasPublicacione->create();
			if ($this->EtiquetasPublicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The etiquetas publicacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etiquetas publicacione could not be saved. Please, try again.'));
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
		if (!$this->EtiquetasPublicacione->exists($id)) {
			throw new NotFoundException(__('Invalid etiquetas publicacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EtiquetasPublicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The etiquetas publicacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etiquetas publicacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EtiquetasPublicacione.' . $this->EtiquetasPublicacione->primaryKey => $id));
			$this->request->data = $this->EtiquetasPublicacione->find('first', $options);
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
		$this->EtiquetasPublicacione->id = $id;
		if (!$this->EtiquetasPublicacione->exists()) {
			throw new NotFoundException(__('Invalid etiquetas publicacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EtiquetasPublicacione->delete()) {
			$this->Session->setFlash(__('Etiquetas publicacione deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Etiquetas publicacione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
