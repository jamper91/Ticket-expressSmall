<div class="eventos index">
	<h2><?php echo __('Eventos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('imagen'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($eventos as $evento): ?>
	<tr>
		<td><?php echo h($evento['Evento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evento['Tipo']['id'], array('controller' => 'tipos', 'action' => 'view', $evento['Tipo']['id'])); ?>
		</td>
		<td><?php echo h($evento['Evento']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['imagen']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evento['Evento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evento['Evento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evento['Evento']['id']), array(), __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funciones'), array('controller' => 'funciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcione'), array('controller' => 'funciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
