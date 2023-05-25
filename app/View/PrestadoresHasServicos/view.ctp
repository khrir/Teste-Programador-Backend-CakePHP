<div class="prestadoresHasServicos view">
	<h2><?php echo __('Prestador possui Serviços'); ?></h2>
	<dl>
		<dt><?php echo __('Prestador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($prestadoresHasServico['Prestadore']['nome'], array('controller' => 'prestadores', 'action' => 'view', $prestadoresHasServico['Prestadore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serviço'); ?></dt>
		<dd>
			<?php echo $this->Html->link($prestadoresHasServico['Servico']['nome'], array('controller' => 'servicos', 'action' => 'view', $prestadoresHasServico['Servico']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar a Relação'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Prestadores'), array('controller' => 'prestadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
	</ul>
</div>
