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
        <li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $servico['Servico']['id']), array('confirm' => __('Você tem certeza que deseja deletar o prestador # %s?', $servico['Servico']['id']))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Serviços'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Prestadores'), array('controller' => 'prestadores', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo (__('Prestadores Relacionados')); ?></h3>
	<?php if (!empty($servico['PrestadoresHasServico'])) : ?>
		<table>
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Prestador'); ?></th>
				<th class="actions"><?php echo __('Ações'); ?></th>
			</tr>
			<?php
			$i = 0;
			
			foreach ($servico['PrestadoresHasServico'] as $prestadoresHasServico) :
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}

			?>
				<tr><?php echo $class; ?>
					<td><?php echo $prestadoresHasServico['Prestadore']['id']?></td>
					<td><?php echo $prestadoresHasServico['Prestadore']['nome']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('Ver', true), array('controller' => 'prestadoresHasServicos', 'action' => 'view', $prestadoresHasServico['id'])) ?>
						<?php echo $this->Html->link(__('Editar', true), array('controller' => 'prestadoresHasServicos', 'action' => 'edit', $prestadoresHasServico['id'])) ?>
						<?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'prestadoresHasServicos', 'action' => 'delete', $prestadoresHasServico['PrestadoresHasServico']['id']), array('confirm' => __('Você tem certeza que deseja deletar a relação # %s?', $prestadoresHasServico['PrestadoresHasServico']['id']))); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>