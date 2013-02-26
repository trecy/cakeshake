<?php
App::uses('AppController', 'Controller');
/**
 * Quizzes Controller
 *
 * @property Quiz $Quiz
 */
class QuizzesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Quiz->recursive = 0;
		$this->set('quizzes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Quiz->exists($id)) {
			throw new NotFoundException(__('Invalid quiz'));
		}
		$options = array('conditions' => array('Quiz.' . $this->Quiz->primaryKey => $id));
		$this->set('quiz', $this->Quiz->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Quiz->create();
			if ($this->Quiz->save($this->request->data)) {
				$this->Session->setFlash(__('The quiz has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quiz could not be saved. Please, try again.'));
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
		if (!$this->Quiz->exists($id)) {
			throw new NotFoundException(__('Invalid quiz'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Quiz->save($this->request->data)) {
				$this->Session->setFlash(__('The quiz has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quiz could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quiz.' . $this->Quiz->primaryKey => $id));
			$this->request->data = $this->Quiz->find('first', $options);
		}
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
		$this->Quiz->id = $id;
		if (!$this->Quiz->exists()) {
			throw new NotFoundException(__('Invalid quiz'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Quiz->delete()) {
			$this->Session->setFlash(__('Quiz deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Quiz was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Quiz->recursive = 0;
		$this->set('quizzes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Quiz->exists($id)) {
			throw new NotFoundException(__('Invalid quiz'));
		}
		$options = array('conditions' => array('Quiz.' . $this->Quiz->primaryKey => $id));
		$this->set('quiz', $this->Quiz->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Quiz->create();
			if ($this->Quiz->save($this->request->data)) {
				$this->Session->setFlash(__('The quiz has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quiz could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Quiz->exists($id)) {
			throw new NotFoundException(__('Invalid quiz'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Quiz->save($this->request->data)) {
				$this->Session->setFlash(__('The quiz has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quiz could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quiz.' . $this->Quiz->primaryKey => $id));
			$this->request->data = $this->Quiz->find('first', $options);
		}
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
		$this->Quiz->id = $id;
		if (!$this->Quiz->exists()) {
			throw new NotFoundException(__('Invalid quiz'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Quiz->delete()) {
			$this->Session->setFlash(__('Quiz deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Quiz was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
