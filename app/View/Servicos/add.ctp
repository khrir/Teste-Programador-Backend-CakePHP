<div class="servicos form">
	<?php
	echo $this->Form->create(
		'Servico',
		array(
			'enctype' => 'multipart/form-data',
			'type' => 'post',
		)
	);
	?>
	<fieldset>
		<legend><?php echo __('Adicionar Serviço'); ?></legend>
		<?php
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

		<li><?php echo $this->Html->link(__('Listar Prestadores'), array('controller' => 'prestadores','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Serviços'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Upload Serviço'), array('action' => 'upload')); ?> </li>
	</ul>
</div>