<div class="prestadores form">
<?php echo $this->Form->create('Prestadore'); ?>
	<fieldset>
		<legend><?php echo __('Editar Prestador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('telefone');
		echo $this->Form->input('email');
		echo $this->Form->input('foto');
		echo $this->Form->input('servicos_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Prestadore.id')), array('confirm' => __('Você tem certeza que deseja deletar o prestador # %s?', $this->Form->value('Prestadore.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Prestadores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
	</ul>
</div>
