<div class="entity9s form">
<?php echo $this->Form->create('Entity9'); ?>
	<fieldset>
		<legend><?php echo __('Add Entity9'); ?></legend>
	<?php
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entity9s'), array('action' => 'index')); ?></li>
	</ul>
</div>
