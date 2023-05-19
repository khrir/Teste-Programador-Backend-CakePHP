<?php

App::uses('AppController', 'Controller');

class ServicosController extends AppController
{
    public $helpers = array('Html','Form', 'Flash');
    public $components = array('Flash');

    public function index()
    {
        $this->set('servicos', $this->paginate());
    }

    public function add()
    {
        if (!empty($this->request->data)) {
            $this->Servico->create();
            if ($this->Servico->save($this->request->data)) 
            {
                $this->Flash->success(__('Serviço adicionado com sucesso.'));
            }
            else 
            {
                $this->Flash->error(__('Erro ao adicionar o Serviço.'));
            }
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function upload()
    {
        if(!empty($this->request->data))
        {

            $file = $this->request->data['Servicos']['csv']['tmp_name'];
            $handle = fopen($file, "r");
            $servicosArr = array();

            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) 
            {
                if($row[0]) {
                    continue;
                }
                array_push($servicosArr, $row);
            }

            foreach ($servicosArr as $item)
            {
                $this->Servico->create();
                $this->Servico->save(array(
                    'nome' => $item[1],
                    'descricao' => $item[2],
                    'preco' => $item[3]
                ));
            }

            fclose($handle);
            $this->Flash->success(__('Serviço adicionado com sucesso.'));
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function edit($id = null)
    {
        if (!$id) 
        {
            throw new NotFoundException(__('Serviço inválido.'));
        }

        $servico = $this->Servico->findById($id);
        if (!$servico)
        {
            throw new NotFoundException(__('Serviço inválido.'));
        }

        if ($this->request->is(array('post', 'put')))
        {
            $this->Servico->id = $id;
            if ($this->Servico->save($this->request->data))
            {
                $this->Flash->success(__('O serviço foi alterado com sucesso.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Erro ao editar o Serviço.'));
        }
        if (!$this->request->data)
        {
            $this->request->data = $servico;
        }
    }

    public function delete($id = null)
    {
        if ($this->Servico->delete($id))
        {
            $this->Flash->success(__('O serviço foi deletado com sucesso.'));
        }
        else 
        {
            $this->Flash->error(
                __('Não foi possível excluir o prestador com id: %s.', h($id))
            );
        }
        return $this->redirect(array('action' => 'index'));
    }
}

?>