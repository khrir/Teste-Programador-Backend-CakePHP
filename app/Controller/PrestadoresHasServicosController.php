<?php
App::uses('AppController', 'Controller');
/**
 * PrestadoresHasServicos Controller
 *
 * @property PrestadoresHasServico $PrestadoresHasServico
 * @property PaginatorComponent $Paginator
 */
class PrestadoresHasServicosController extends AppController {

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
		$this->PrestadoresHasServico->recursive = 0;
		$this->set('prestadoresHasServicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PrestadoresHasServico->exists($id)) {
			throw new NotFoundException(__('Id inválido'));
		}
		$options = array('conditions' => array('PrestadoresHasServico.' . $this->PrestadoresHasServico->primaryKey => $id));
		$this->set('prestadoresHasServico', $this->PrestadoresHasServico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PrestadoresHasServico->create();
			if ($this->PrestadoresHasServico->save($this->request->data)) {
				$this->Flash->success(__('The prestadores has servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The prestadores has servico could not be saved. Please, try again.'));
			}
		}
		$prestadores = $this->PrestadoresHasServico->Prestadore->find('list');
		$servicos = $this->PrestadoresHasServico->Servico->find('list');
		$this->set(compact('prestadores', 'servicos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) 
	{
		if (!$this->PrestadoresHasServico->exists($id)) {
			throw new NotFoundException(__('Id inválido.'));
		}

		if ($this->request->is(array('post', 'put'))) 
		{
			$this->PrestadoresHasServico->id = $id;
			if ($this->PrestadoresHasServico->save($this->request->data)) 
			{
				$this->Flash->success(__('A relação foi alterada com sucesso.'));
				$this->redirect(array('action' => 'index'));
			} 
		} 
		else 
		{
			$options = array('conditions' => array('PrestadoresHasServico.' . $this->PrestadoresHasServico->primaryKey => $id));
			$this->request->data = $this->PrestadoresHasServico->find('first', $options);
		}
		$prestadores = $this->PrestadoresHasServico->Prestadore->find('list');
		$servicos = $this->PrestadoresHasServico->Servico->find('list');
		$this->set(compact('prestadores', 'servicos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->PrestadoresHasServico->exists($id)) {
			throw new NotFoundException(__('Invalid prestadores has servico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PrestadoresHasServico->delete($id)) {
			$this->Flash->success(__('The prestadores has servico has been deleted.'));
		} else {
			$this->Flash->error(__('The prestadores has servico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
