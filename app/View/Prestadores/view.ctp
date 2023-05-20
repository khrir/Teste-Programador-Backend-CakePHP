<div class="prestadores view">
<h2><?php echo __('Prestadores'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($prestadore['Prestadore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($prestadore['Prestadore']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($prestadore['Prestadore']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($prestadore['Prestadore']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php 
			echo $this->Html->image($prestadore['Prestadore']['foto'], array(
				'alt' => 'Foto de perfil de ' . $prestadore['Prestadore']['nome'],
				'style' => 'width: 150px;',
			));
			?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servicos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($prestadore['Servicos']['nome'], array('controller' => 'servicos', 'action' => 'view', $prestadore['Servicos']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Prestador'), array('action' => 'edit', $prestadore['Prestadore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Prestadore.id')), array('confirm' => __('Você tem certeza que deseja deletar o prestador # %s?', $this->Form->value('Prestadore.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar prestadores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Cadastrar Prestador'), array('action' => 'add')); ?> </li>
	</ul>
</div>
