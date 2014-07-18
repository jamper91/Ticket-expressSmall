<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Editar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('evento_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('Funcione');
		echo $this->Form->input('precio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
