<div class="categorias view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Entrada'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id_entrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Evento'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id_evento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), array(), __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funciones'), array('controller' => 'funciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcione'), array('controller' => 'funciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Funciones'); ?></h3>
	<?php if (!empty($categoria['Funcione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Funcione'] as $funcione): ?>
		<tr>
			<td><?php echo $funcione['id']; ?></td>
			<td><?php echo $funcione['evento_id']; ?></td>
			<td><?php echo $funcione['nombre']; ?></td>
			<td><?php echo $funcione['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'funciones', 'action' => 'view', $funcione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'funciones', 'action' => 'edit', $funcione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'funciones', 'action' => 'delete', $funcione['id']), array(), __('Are you sure you want to delete # %s?', $funcione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funcione'), array('controller' => 'funciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
