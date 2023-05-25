<div class="prestadoresHasServicos index">
	<h2><?php echo __('Prestadores possuem Servicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('prestadore_id'); ?></th>
				<th><?php echo $this->Paginator->sort('servico_id'); ?></th>
				<th class="actions"><?php echo __('Ações'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($prestadoresHasServicos as $prestadoresHasServico) : ?>
				<tr>
					<td><?php echo h($prestadoresHasServico['PrestadoresHasServico']['id']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link($prestadoresHasServico['Prestadore']['nome'], array('controller' => 'prestadores', 'action' => 'view', $prestadoresHasServico['Prestadore']['id'])); ?></td>
					<td><?php echo $this->Html->link($prestadoresHasServico['Servico']['nome'], array('controller' => 'servicos', 'action' => 'view', $prestadoresHasServico['Servico']['id'])); ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $prestadoresHasServico['PrestadoresHasServico']['id'])); ?>
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $prestadoresHasServico['PrestadoresHasServico']['id'])); ?>
						<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $prestadoresHasServico['PrestadoresHasServico']['id']), array('confirm' => __('Você tem certeza que deseja deletar a relação # %s?', $prestadoresHasServico['PrestadoresHasServico']['id']))); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} de {:pages}, com {:current} / {:count} relações')
		));
		?> </p>
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
		<li><?php echo $this->Html->link(__('Adicionar Relação'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Prestadores'), array('controller' => 'prestadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
	</ul>
</div>