<div class="servicos view">
<h2><?php echo __('Serviço'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrição'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preço'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['preco']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Serviço'), array('action' => 'edit', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Servico.id')), array('confirm' => __('Você tem certeza que deseja deletar o serviço # %s?', $this->Form->value('Prestadore.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Serviços'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Prestadores'), array('controller' => 'prestadores', 'action' => 'index')); ?> </li>
	</ul>
</div>