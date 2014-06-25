<?php
App::uses('AppController', 'Controller');
/**
 * Vnilais Controller
 *
 * @property Vnilai $Vnilai
 * @property PaginatorComponent $Paginator
 */
class VnilaisController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vnilai->recursive = 0;
		$this->set('vnilais', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vnilai->exists($id)) {
			throw new NotFoundException(__('Invalid vnilai'));
		}
		$options = array('conditions' => array('Vnilai.' . $this->Vnilai->primaryKey => $id));
		$this->set('vnilai', $this->Vnilai->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vnilai->create();
			if ($this->Vnilai->save($this->request->data)) {
				$this->Session->setFlash(__('The vnilai has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vnilai could not be saved. Please, try again.'));
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
		if (!$this->Vnilai->exists($id)) {
			throw new NotFoundException(__('Invalid vnilai'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vnilai->save($this->request->data)) {
				$this->Session->setFlash(__('The vnilai has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vnilai could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vnilai.' . $this->Vnilai->primaryKey => $id));
			$this->request->data = $this->Vnilai->find('first', $options);
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
		$this->Vnilai->id = $id;
		if (!$this->Vnilai->exists()) {
			throw new NotFoundException(__('Invalid vnilai'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vnilai->delete()) {
			$this->Session->setFlash(__('The vnilai has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vnilai could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
