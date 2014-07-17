<div class="entradas view">
<h2><?php echo __('Entrada'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['codigo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entrada'), array('action' => 'edit', $entrada['Entrada']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entrada'), array('action' => 'delete', $entrada['Entrada']['id']), array(), __('Are you sure you want to delete # %s?', $entrada['Entrada']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entradas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entrada'), array('action' => 'add')); ?> </li>
	</ul>
</div>
