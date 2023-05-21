<?php
App::uses('AppModel', 'Model');
/**
 * Servico Model
 *
 */
class Servico extends AppModel
{

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
}
