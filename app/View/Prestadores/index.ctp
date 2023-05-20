<div class="prestadores index">
	<h2><?php echo __('Prestadores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('servicos_id'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($prestadores as $prestadore): ?>
	<tr>
		<td><?php echo h($prestadore['Prestadore']['id']); ?>&nbsp;</td>
		<td><?php echo h($prestadore['Prestadore']['nome']); ?>&nbsp;</td>
		<td><?php echo h($prestadore['Prestadore']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($prestadore['Prestadore']['email']); ?>&nbsp;</td>
		<td><?php echo h($prestadore['Prestadore']['foto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($prestadore['Servicos']['id'], array('controller' => 'servicos', 'action' => 'view', $prestadore['Servicos']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $prestadore['Prestadore']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $prestadore['Prestadore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $prestadore['Prestadore']['id']), array('confirm' => __('Você tem certeza que deseja deletar o prestador # %s?', $prestadore['Prestadore']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Página {:page} de {:pages}, com {:current} / {:count} cadastros')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('posterior') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Cadastrar Prestador'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Serviços'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
	</ul>
</div>
