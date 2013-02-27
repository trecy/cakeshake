<?php
/**
* Application level Controller
*
* This file is application-wide controller file. You can put all
* application-wide controller-related methods here.
*
* PHP 5
*
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* Redistributions of files must retain the above copyright notice.
*
* @copyright Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link http://cakephp.org CakePHP(tm) Project
* @package app.Controller
* @since CakePHP(tm) v 0.2.9
* @license MIT License (http://www.opensource.org/licenses/mit-license.php)
*/

App::uses('Controller', 'Controller');

/**
* Application Controller
*
* Add your application-wide methods in the class below, your controllers
* will inherit them.
*
* @package app.Controller
* @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
*/
	class AppController extends Controller {

		public $components = array(
			'Session',
			'Auth' => array(
				'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
				'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
				'authorize' => array('Controller')
					)
				);

				function beforeFilter() {
					if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
						$this->layout = 'admin';
					}
					$this ->Auth->allow('index', 'view');

					if($this->Auth->loggedIn())
					{
						$this->set('me', $this->Auth->user());
					}

					else
					{
						$this->set('me', array('username'=>'non connecté','id'=>0));
					}
				}

				public function isAuthorized($user){


					if($this->action == 'add'){

						if(isset($user['username']) && $user['username'] > 0){
							return true;
						}
						else {
							return false;
						}
					}

					// if($this->action == 'edit' || $this->action == 'delete'){
					if(in_array($this->action, array('edit','delete'))){


						// ok pour les moderateurs
						if(isset($user['username']) && $user['username'] == 2){
							return true;
						}
						else {
							//quotes/edit/6, quote_id is 6
							$quote_id = $this->request->params['pass'][0];
							$user_id = $user['id'];
						}

				}

					//return parent::isAuthorized($user);
				}

}