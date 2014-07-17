<div class="entity9s view">
<h2><?php echo __('Entity9'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entity9['Entity9']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($entity9['Entity9']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entity9'), array('action' => 'edit', $entity9['Entity9']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entity9'), array('action' => 'delete', $entity9['Entity9']['id']), array(), __('Are you sure you want to delete # %s?', $entity9['Entity9']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entity9s'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entity9'), array('action' => 'add')); ?> </li>
	</ul>
</div>
