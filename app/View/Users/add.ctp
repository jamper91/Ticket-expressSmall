<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('password');
		echo $this->Form->input('username');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('correo');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		//echo $this->Form->input('fechanacimiento');
		echo $this->Form->input('fechanacimiento', array(
							    'label' => 'fechanacimiento',
							    'dateFormat' => 'DMY',
							    'minYear' => date('Y') - 70,
    							'maxYear' => date('Y') - 18,
							    ));
		echo $this->Form->input('tiposangre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
