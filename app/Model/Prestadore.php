<?php
App::uses('AppModel', 'Model');
/**
 * Prestadore Model
 *
 * @property Servicos $Servicos
 */
class Prestadore extends AppModel
{
	public $displayField = 'nome';
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
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'O prestador já existe no banco.',
			),
		),
		'telefone' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Informe outro número.',
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Informe outro e-mail.',
			),
		),
		'foto' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
		),
	);
	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'PrestadoresHasServico' => array(
			'className' => 'PrestadoresHasServico',
			'foreignKey' => 'prestadore_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
}
