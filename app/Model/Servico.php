<?php
App::uses('AppModel', 'Model');
/**
 * Servico Model
 *
 */
class Servico extends AppModel
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
				'message' => 'O serviço já existe no banco.',
			),
		),
		'descricao' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
		),
		'preco' => array(
			'decimal' => array(
				'rule' => array('decimal'),
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
			'foreignKey' => 'servico_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
}
