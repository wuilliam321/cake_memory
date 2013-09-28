<?php
App::uses('AppController', 'Controller');
/**
 * Etiquetas Controller
 *
 * @property Etiqueta $Etiqueta
 */
class EtiquetasController extends AppController {
	public $paginate = array(
        'limit' => 1
    );
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Etiqueta->recursive = 0;
		$this->set('etiquetas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Etiqueta->exists($id)) {
			throw new NotFoundException(__('Invalid etiqueta'));
		}
		$options = array('conditions' => array('Etiqueta.' . $this->Etiqueta->primaryKey => $id));
		$this->set('etiqueta', $this->Etiqueta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($publicacione_id = null) {
		if ($this->request->is('post')) {
			$this->Etiqueta->create();
			if ($this->Etiqueta->save($this->request->data)) {
				$this->Session->setFlash(__('The etiqueta has been saved'));
				if (isset($this->request->data['Publicacione']['Publicacione'])) {
					$this->redirect(array('controller' => 'publicaciones', 'action' => 'edit', $this->request->data['Publicacione']['Publicacione']));
				}
				$this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The etiqueta could not be saved. Please, try again.'));
			}
		}
		$publicacione = null;
		if ($publicacione_id) {
			$publicacione = $this->Etiqueta->Publicacione->findById($publicacione_id);
		}
		$this->set(compact('publicacione'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Etiqueta->exists($id)) {
			throw new NotFoundException(__('Invalid etiqueta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Etiqueta->save($this->request->data)) {
				$this->Session->setFlash(__('The etiqueta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etiqueta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Etiqueta.' . $this->Etiqueta->primaryKey => $id));
			$this->request->data = $this->Etiqueta->find('first', $options);
		}
		$publicacione = $this->Etiqueta->Publicacione->findById($publicacione_id);
		$this->set(compact('publicacione'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Etiqueta->id = $id;
		if (!$this->Etiqueta->exists()) {
			throw new NotFoundException(__('Invalid etiqueta'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Etiqueta->delete()) {
			$this->Session->setFlash(__('Etiqueta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Etiqueta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
