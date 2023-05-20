<div class="prestadores form">
<?php echo $this->Form->create('Prestadore'); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Prestador'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('telefone');
		echo $this->Form->input('email');
		echo $this->Form->input('foto', array('type' => 'file'));
		echo $this->Form->input('servicos_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Prestadores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Serviços'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
	</ul>
</div>
