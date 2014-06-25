<?php
App::uses('AppController', 'Controller');
/**
 * Mapels Controller
 *
 * @property Mapel $Mapel
 * @property PaginatorComponent $Paginator
 */
class MapelsController extends AppController {

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
		$this->Mapel->recursive = 0;
		$this->set('mapels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mapel->exists($id)) {
			throw new NotFoundException(__('Invalid mapel'));
		}
		$options = array('conditions' => array('Mapel.' . $this->Mapel->primaryKey => $id));
		$this->set('mapel', $this->Mapel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mapel->create();
			if ($this->Mapel->save($this->request->data)) {
				$this->Session->setFlash(__('The mapel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mapel could not be saved. Please, try again.'));
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
		if (!$this->Mapel->exists($id)) {
			throw new NotFoundException(__('Invalid mapel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mapel->save($this->request->data)) {
				$this->Session->setFlash(__('The mapel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mapel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mapel.' . $this->Mapel->primaryKey => $id));
			$this->request->data = $this->Mapel->find('first', $options);
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
		$this->Mapel->id = $id;
		if (!$this->Mapel->exists()) {
			throw new NotFoundException(__('Invalid mapel'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mapel->delete()) {
			$this->Session->setFlash(__('The mapel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mapel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
