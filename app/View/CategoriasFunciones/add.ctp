<div class="categoriasFunciones form">
<?php echo $this->Form->create('CategoriasFuncione'); ?>
	<fieldset>
		<legend><?php echo __('Add Categorias Funcione'); ?></legend>
	<?php
		echo $this->Form->input('id_funcione');
		echo $this->Form->input('id_categoria');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categorias Funciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
