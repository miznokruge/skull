<?php
App::uses('AppController', 'Controller');
/**
 * Nilais Controller
 *
 * @property Nilai $Nilai
 * @property PaginatorComponent $Paginator
 */
class NilaisController extends AppController {

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
		$this->Nilai->recursive = 0;
		$this->set('nilais', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nilai->exists($id)) {
			throw new NotFoundException(__('Invalid nilai'));
		}
		$options = array('conditions' => array('Nilai.' . $this->Nilai->primaryKey => $id));
		$this->set('nilai', $this->Nilai->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Nilai->create();
			if ($this->Nilai->save($this->request->data)) {
				$this->Session->setFlash(__('The nilai has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nilai could not be saved. Please, try again.'));
			}
		}
		$siswas = $this->Nilai->Siswa->find('list');
		$mapels = $this->Nilai->Mapel->find('list');
		$semesters = $this->Nilai->Semester->find('list');
		$this->set(compact('siswas', 'mapels', 'semesters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Nilai->exists($id)) {
			throw new NotFoundException(__('Invalid nilai'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Nilai->save($this->request->data)) {
				$this->Session->setFlash(__('The nilai has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nilai could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Nilai.' . $this->Nilai->primaryKey => $id));
			$this->request->data = $this->Nilai->find('first', $options);
		}
		$siswas = $this->Nilai->Siswa->find('list');
		$mapels = $this->Nilai->Mapel->find('list');
		$semesters = $this->Nilai->Semester->find('list');
		$this->set(compact('siswas', 'mapels', 'semesters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Nilai->id = $id;
		if (!$this->Nilai->exists()) {
			throw new NotFoundException(__('Invalid nilai'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Nilai->delete()) {
			$this->Session->setFlash(__('The nilai has been deleted.'));
		} else {
			$this->Session->setFlash(__('The nilai could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
