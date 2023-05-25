<?php
App::uses('AppModel', 'Model');
/**
 * PrestadoresHasServico Model
 *
 * @property Prestadore $Prestadore
 * @property Servico $Servico
 */
class PrestadoresHasServico extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'prestadore_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'required' => false,
    		),
		),
		'servico_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'required' => false,
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'O prestador já fornece esse serviço.',
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Prestadore' => array(
			'className' => 'Prestadore',
			'foreignKey' => 'prestadore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Servico' => array(
			'className' => 'Servico',
			'foreignKey' => 'servico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
