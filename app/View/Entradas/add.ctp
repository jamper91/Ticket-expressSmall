<div class="entradas form">
<?php echo $this->Form->create('Entrada'); ?>
	<fieldset>
		<legend><?php echo __('Add Entrada'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('codigo');
		echo $this->Form->input('categoria_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entradas'), array('action' => 'index')); ?></li>
	</ul>
</div>
