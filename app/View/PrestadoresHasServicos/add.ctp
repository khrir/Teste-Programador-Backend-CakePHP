<div class="prestadoresHasServicos form">
<?php echo $this->Form->create('PrestadoresHasServico'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Serviços ao Prestador'); ?></legend>
	<?php
		echo $this->Form->input('prestadore_id');
		echo $this->Form->input('servico_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar a Relação'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Prestadores'), array('controller' => 'prestadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
	</ul>
</div>
