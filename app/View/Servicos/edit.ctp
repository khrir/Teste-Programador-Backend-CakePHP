<div class="prestadores form">
    <?php echo $this->Form->create('Servico'); ?>
    <fieldset>
        <legend><?php echo __('Editar Serviço'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('nome');
        echo $this->Form->input('descricao');
        echo $this->Form->input('preco');

        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Ações'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Servico.id')), array('confirm' => __('Você tem certeza que deseja deletar # %s?', $this->Form->value('Servico.id')))); ?></li>
        <li><?php echo $this->Html->link(__('Listar Prestadores'), array('controller' => 'prestadores', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Listar Serviços'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Adicionar Serviços'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Upload Serviços'), array('action' => 'upload')); ?> </li>
    </ul>
</div>