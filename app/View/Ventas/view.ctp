<div class="ventas view">
<h2><?php echo __('Venta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funcione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venta['Funcione']['id'], array('controller' => 'funciones', 'action' => 'view', $venta['Funcione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venta['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $venta['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipopago'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['tipopago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Venta'), array('action' => 'edit', $venta['Venta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Venta'), array('action' => 'delete', $venta['Venta']['id']), array(), __('Are you sure you want to delete # %s?', $venta['Venta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funciones'), array('controller' => 'funciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcione'), array('controller' => 'funciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
