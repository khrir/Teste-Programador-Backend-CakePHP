<?php
App::uses('AppModel', 'Model');
/**
 * Prestadore Model
 *
 * @property Servicos $Servicos
 */
class Prestadore extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
		),
		'telefone' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
		),
		'foto' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
		),
		'servicos_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
		),
	);

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Servicos' => array(
			'className' => 'Servicos',
			'foreignKey' => 'servicos_id',
		)
	);
}
