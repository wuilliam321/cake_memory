<?php
App::uses('AppController', 'Controller');
/**
 * Publicaciones Controller
 *
 * @property Publicacione $Publicacione
 */
class PublicacionesController extends AppController {
	public $components = array('Search.Prg');
    public $presetVars = true; // using the model configuration
	
	public function find() {
        $this->Prg->commonProcess();
		$this->paginate = array(
			'conditions' => $this->Publicacione->parseCriteria($this->Prg->parsedParams()),
			'limit' => 2,
			'order' => 'Publicacione.created DESC'
		);
        $this->set('publicaciones', $this->paginate());
    }
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Publicacione->recursive = 0;
		$this->paginate = array(
			'limit' => 2,
			'order' => 'Publicacione.created DESC'
		);
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
		$this->Publicacione->recursive = 3;
		if (!$this->Publicacione->exists($id)) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		$options = array('conditions' => array('Publicacione.' . $this->Publicacione->primaryKey => $id));
		$publicacione = $this->Publicacione->find('first', $options);
		$users = $this->Publicacione->Comentario->User->find("list");
		$this->set(compact('publicacione', 'users'));
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
				$this->redirect(array('action' => 'edit', $this->Publicacione->getLastInsertID()));
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
			if ($this->Publicacione->saveAll($this->request->data)) {
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
		$recursomultimediatipos = $this->Publicacione->Recursomultimedia->Recursomultimediatipo->find('list');
		$this->set(compact('autores', 'etiquetas', 'recursomultimediatipos'));
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


/**
 * recientes method
 *
 * @return array
 */
	public function recientes() {
		$this->Publicacione->recursive = 0;
		$this->paginate = array(
			'limit' => 2,
			'order' => 'Publicacione.created DESC'
		);
		$publicaciones = $this->paginate();
		$this->set(compact('publicaciones'));
		return $publicaciones;
	}
}
