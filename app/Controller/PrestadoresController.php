<?php
App::uses('AppController', 'Controller');

class PrestadoresController extends AppController
{
    /**
     * Components
     *
     * @var array
     */
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash', 'Paginator');

    public function index()
    {
        $this->Prestadore->recursive = 0;
        $this->set('prestadores', $this->Paginator->paginate($this->Prestadore));
    }


    public function view($id = null)
    {
        if (!$id) {
            $this->Flash->set('Prestador não encontrado.', true);
            $this->redirect(array('action' => 'index'));
        }
        $this->set('prestadore', $this->Prestadore->findById($id));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            if (!empty($this->request->data)) {
                $filename = $this->request->data['Prestadore']['foto']['name'];
                $url = Router::url('/', true) . 'images/' . $filename;
                $uploadPath = 'images/';
                $uploadFile = $uploadPath . $filename;
                if (move_uploaded_file($this->request->data['Prestadore']['foto']['tmp_name'], $uploadFile)) {

                    $prestador = $this->Prestadore->create();
                    $prestador['nome'] = $this->request->data['Prestadore']['nome'];
                    $prestador['telefone'] = $this->request->data['Prestadore']['telefone'];
                    $prestador['email'] = $this->request->data['Prestadore']['email'];
                    $prestador['foto'] = $url;
                    $prestador['servicos_id'] = $this->request->data['Prestadore']['servicos_id'];

                    if ($this->Prestadore->save($prestador)) {
                        $this->Flash->success(_('Prestador cadastrado com sucesso.'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Flash->error('O prestador não foi cadastrado.');
                    }
                    $this->set('prestador', $prestador);
                }
            }
        }
        $servicos = $this->Prestadore->Servicos->find('list');
        $this->set('servicos', $servicos);
    }

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Serviço inválido.'));
        }

        $prestador = $this->Prestadore->findById($id);
        if (!$prestador) {
            throw new NotFoundException(__('Serviço inválido.'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Prestadore->id = $id;
            if ($this->Prestadore->save($this->request->data)) {
                $this->Flash->success('Prestador alterado com sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }

        if (!$this->request->data) {
            $this->request->data = $prestador;
        }
    }

    public function delete($id = null)
    {
        if ($this->Prestadore->delete($id)) {
            $this->Flash->success(
                __('O prestador com o id: %s foi excluído.', h($id))
            );
        } else {
            $this->Flash->error(
                __('Não foi possível excluir o prestador com id: %s.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }
}
