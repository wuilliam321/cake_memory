<?php
App::uses('AppController', 'Controller');
/**
 * Institutos Controller
 *
 * @property Instituto $Instituto
 */
class InstitutosController extends AppController {
	public $components = array('Search.Prg');
    public $presetVars = true; // using the model configuration
	
	public function find() {
        $this->Prg->commonProcess();
		$this->paginate = array(
			'conditions' => $this->Instituto->parseCriteria($this->Prg->parsedParams()),
			'limit' => 2,
			'order' => 'Instituto.id DESC'
		);
        $this->set('institutos', $this->paginate());
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Instituto->recursive = 1;
		$this->set('institutos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Instituto->recursive = 1;
		if (!$this->Instituto->exists($id)) {
			throw new NotFoundException(__('Invalid instituto'));
		}
		$options = array('conditions' => array('Instituto.' . $this->Instituto->primaryKey => $id));
		$this->set('instituto', $this->Instituto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instituto->create();
			if ($this->Instituto->save($this->request->data)) {
				$this->Session->setFlash(__('The instituto has been saved'));
				$this->redirect(array('action' => 'edit', $this->Instituto->getLastInsertID()));
			} else {
				$this->Session->setFlash(__('The instituto could not be saved. Please, try again.'));
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
		if (!$this->Instituto->exists($id)) {
			throw new NotFoundException(__('Invalid instituto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Instituto->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The instituto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instituto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Instituto.' . $this->Instituto->primaryKey => $id));
			$this->request->data = $this->Instituto->find('first', $options);
		}
		$unidadinvestigaciontipos = $this->Instituto->Unidadinvestigacione->Unidadinvestigaciontipo->find("list");
		$this->set(compact('unidadinvestigaciontipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Instituto->id = $id;
		if (!$this->Instituto->exists()) {
			throw new NotFoundException(__('Invalid instituto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Instituto->delete()) {
			$this->Session->setFlash(__('Instituto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instituto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
