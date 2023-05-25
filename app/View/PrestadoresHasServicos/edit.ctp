<div class="prestadoresHasServicos form">
<?php echo $this->Form->create('PrestadoresHasServico'); ?>
	<fieldset>
		<legend><?php echo __('Editar Relação entre Serviço e Prestador'); ?></legend>
	<?php
		echo $this->Form->input('prestadore_id');
		echo $this->Form->input('servico_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('PrestadoresHasServico.id')), array('confirm' => __('Você tem certeza que deseja deletar a relação # %s?', $this->Form->value('PrestadoresHasServico.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar a Relação'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Prestadores'), array('controller' => 'prestadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
	</ul>
</div>
