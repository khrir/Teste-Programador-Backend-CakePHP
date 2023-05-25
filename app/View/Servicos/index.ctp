<div class="servicos index">
	<h2><?php echo __('Serviços'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('nome'); ?></th>
				<th><?php echo $this->Paginator->sort('descrição'); ?></th>
				<th><?php echo $this->Paginator->sort('preço'); ?></th>
				<th class="actions"><?php echo __('Ações'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($servicos as $servico) : ?>
				<tr>
					<td><?php echo h($servico['Servico']['id']); ?>&nbsp;</td>
					<td><?php echo h($servico['Servico']['nome']); ?>&nbsp;</td>
					<td><?php echo h($servico['Servico']['descricao']); ?>&nbsp;</td>
					<td><?php echo h($servico['Servico']['preco']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Ver'), array('action' => 'view',  $servico['Servico']['id'])); ?>
						<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $servico['Servico']['id'])); ?>
						<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $servico['Servico']['id']), array('confirm' => __('Você tem certeza que deseja deletar o prestador # %s?', $servico['Servico']['id']))); ?>
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
		?> </p>
	<div class="paging">
		<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Próximo') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Prestador'), array('controller' => 'prestadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar serviços'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Upload serviços'), array('controller' => 'servicos', 'action' => 'upload')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Relação com Prestadores'), array('controller' => 'prestadores_has_servicos', 'action' => 'index')); ?> </li>
	</ul>
</div>



<!-- 

    $detalhe = array();
    $column_name = array();

    $column_name = array_keys($servicos[0]['Servico']);

    foreach ($servicos as $servico) {
        $editLink = $this->Html->link('Alterar', '/servicos/edit/' . $servico['Servico']['id']);
        $delLink = $this->Html->link('Deletar', '/servicos/delete/' . $servico['Servico']['id']);
        $detalhe[] = array(
            $servico['Servico']['id'],
            $this->Html->link($servico['Servico']['nome'], ['action' => 'view', $servico['Servico']['id']]),
            $servico['Servico']['descricao'],
            $servico['Servico']['preco'],
            $editLink,
            $delLink
        );
    }

    $header = $this->Html->tableHeaders($column_name);
    $body = $this->Html->tableCells($detalhe);
    // $editButton = $this->Html->link()
    echo $this->Html->tag('table', $header . $body);
    ?> -->