<div class="ventas index">
	<h2><?php echo __('Ventas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('funcione_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('tipopago'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ventas as $venta): ?>
	<tr>
		<td><?php echo h($venta['Venta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($venta['Funcione']['id'], array('controller' => 'funciones', 'action' => 'view', $venta['Funcione']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($venta['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $venta['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($venta['Venta']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($venta['Venta']['tipopago']); ?>&nbsp;</td>
		<td><?php echo h($venta['Venta']['fecha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $venta['Venta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $venta['Venta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $venta['Venta']['id']), array(), __('Are you sure you want to delete # %s?', $venta['Venta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Venta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Funciones'), array('controller' => 'funciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcione'), array('controller' => 'funciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
