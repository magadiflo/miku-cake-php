<?php
App::uses('AppController', 'Controller');
/**
 * Platillos Controller
 *
 * @property Platillo $Platillo
 * @property PaginatorComponent $Paginator
 */
class PlatillosController extends AppController {

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
		$this->Platillo->recursive = 0;
		$this->set('platillos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		$options = array('conditions' => array('Platillo.' . $this->Platillo->primaryKey => $id));
		$this->set('platillo', $this->Platillo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Platillo->create();
			if ($this->Platillo->save($this->request->data)) {
				$this->Session->setFlash(__('The platillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The platillo could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Platillo->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Platillo->exists($id)) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Platillo->save($this->request->data)) {
				$this->Session->setFlash(__('The platillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The platillo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Platillo.' . $this->Platillo->primaryKey => $id));
			$this->request->data = $this->Platillo->find('first', $options);
		}
		$categorias = $this->Platillo->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Platillo->id = $id;
		if (!$this->Platillo->exists()) {
			throw new NotFoundException(__('Invalid platillo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Platillo->delete()) {
			$this->Session->setFlash(__('The platillo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The platillo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}