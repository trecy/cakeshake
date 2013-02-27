<?php
App::uses('AppController', 'Controller');
/**
 * Pictures Controller
 *
 * @property Picture $Picture
 */
class PicturesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
		$this->set('picture', $this->Picture->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Picture->create();
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		}
		$users = $this->Picture->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
			$this->request->data = $this->Picture->find('first', $options);
		}
		$users = $this->Picture->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Picture->id = $id;
		if (!$this->Picture->exists()) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Picture->delete()) {
			$this->Session->setFlash(__('Picture deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
		$this->set('picture', $this->Picture->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Picture->create();
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		}
		$users = $this->Picture->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
			$this->request->data = $this->Picture->find('first', $options);
		}
		$users = $this->Picture->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Picture->id = $id;
		if (!$this->Picture->exists()) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Picture->delete()) {
			$this->Session->setFlash(__('Picture deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
