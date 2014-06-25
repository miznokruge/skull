<?php
App::uses('AppController', 'Controller');
/**
 * Siswas Controller
 *
 * @property Siswa $Siswa
 * @property PaginatorComponent $Paginator
 */
class SiswasController extends AppController {

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
		$this->Siswa->recursive = 0;
		$this->set('siswas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Siswa->exists($id)) {
			throw new NotFoundException(__('Invalid siswa'));
		}
		$options = array('conditions' => array('Siswa.' . $this->Siswa->primaryKey => $id));
		$this->set('siswa', $this->Siswa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Siswa->create();
			if ($this->Siswa->save($this->request->data)) {
				$this->Session->setFlash(__('The siswa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The siswa could not be saved. Please, try again.'));
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
		if (!$this->Siswa->exists($id)) {
			throw new NotFoundException(__('Invalid siswa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Siswa->save($this->request->data)) {
				$this->Session->setFlash(__('The siswa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The siswa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Siswa.' . $this->Siswa->primaryKey => $id));
			$this->request->data = $this->Siswa->find('first', $options);
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
		$this->Siswa->id = $id;
		if (!$this->Siswa->exists()) {
			throw new NotFoundException(__('Invalid siswa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Siswa->delete()) {
			$this->Session->setFlash(__('The siswa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The siswa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
