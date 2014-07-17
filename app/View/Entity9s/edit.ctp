<div class="entity9s form">
<?php echo $this->Form->create('Entity9'); ?>
	<fieldset>
		<legend><?php echo __('Edit Entity9'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Entity9.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Entity9.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entity9s'), array('action' => 'index')); ?></li>
	</ul>
</div>
