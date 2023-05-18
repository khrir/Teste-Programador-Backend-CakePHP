<?php
App::uses('AppController', 'Controller');

class PrestadoresController extends AppController
{
    public $helpers = array('Html','Form', 'Flash');
    public $components = array('Flash');

    public function initialize()
    {
        $this->loadModel('Prestador');
    }

    public function index()
    {
        $this->set('prestadores', $this->paginate());
    }

    public function view( $id = null)
    {
        if (!$id)
        {
            $this->Flash->set('Prestador não encontrado.', true);
            $this->redirect(array('action' => 'index'));
        }
        $this->set('prestador', $this->Prestadore->findById($id));
    }

    public function add()
    {
        if ($this->request->is('post'))
        {
            if (!empty($this->request->data))
            {
                $filename = $this->request->data['Prestadore']['foto']['name'];
                $url = Router::url('/', true) . 'images/' . $filename;
                $uploadPath = 'images/';
                $uploadFile = $uploadPath . $filename;
                if (move_uploaded_file($this->request->data['Prestadore']['foto']['tmp_name'], $uploadFile))
                {   
                    
                    $prestador = $this->Prestadore->create();
                    $prestador['nome'] = $this->request->data['Prestadore']['nome'];
                    $prestador['telefone'] = $this->request->data['Prestadore']['telefone'];
                    $prestador['email'] = $this->request->data['Prestadore']['email'];
                    $prestador['foto'] = $url;

                    if($this->Prestadore->save($prestador))
                    {
                        $this->Flash->success(_('Prestador cadastrado com sucesso.'));
                        $this->redirect(array('action' => 'index'));
                    }
                    else 
                    {
                        $this->Flash->error('O prestador não foi cadastrado.');
                    }
                    $this->set('prestador', $prestador);
                }
            }
        }
    }

    public function edit($id = null) 
    {
        if (!empty($this->request->data))
        {
            if ($this->Prestadore->save($this->request->data)) 
            {
                $this->Flash->success('Prestador alterado com sucesso.');
                $this->redirect(array('action' => 'index'));
            } 
            else
            {
                $fields = array('Prestadore.id', 'Prestadore.nome', 'Prestadore.telefone', 'Prestadore.email', 'Prestadore.foto');
                $conditions = array('Prestadore.id' => $id);
                $this->request->data = $this->Prestadore->find('first', compact('fields', 'conditions'));
                // $this->request->data = $this->Prestadore->findById($id);
            }
        }
    }

    public function delete($id = null)
    {
        $this->Prestadore->delete($id);
        $this->redirect(array('action' => 'index'));
    }
}