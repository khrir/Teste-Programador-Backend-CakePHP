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
<div class="related">
	<h3><?php echo (__('Serviços Relacionados')); ?></h3>
	<?php if (!empty($prestadore['PrestadoresHasServico'])) : ?>
		<table>
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Serviço'); ?></th>
				<th class="actions"><?php echo __('Ações'); ?></th>
			</tr>
			<?php
			$i = 0;
			
			foreach ($prestadore['PrestadoresHasServico'] as $prestadoresHasServico) :
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}

			?>
				<tr><?php echo $class; ?>
					<td><?php echo $prestadoresHasServico['id']?></td>
					<td><?php echo $prestadoresHasServico['Servico']['nome']; ?></td>
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