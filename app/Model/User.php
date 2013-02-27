<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent','Controller/Component');
/**
 * User Model
 *
 * @property Picture $Picture
 */
class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Picture' => array(
			'className' => 'Picture',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	public function beforeSave($options = array()) {
	  	if (isset($this->data[$this->alias]['password'])) {
	 		$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}

}
 

 
