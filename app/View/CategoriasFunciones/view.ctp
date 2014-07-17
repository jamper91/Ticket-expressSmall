<div class="categoriasFunciones view">
<h2><?php echo __('Categorias Funcione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriasFuncione['CategoriasFuncione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Funcione'); ?></dt>
		<dd>
			<?php echo h($categoriasFuncione['CategoriasFuncione']['id_funcione']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Categoria'); ?></dt>
		<dd>
			<?php echo h($categoriasFuncione['CategoriasFuncione']['id_categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categoriasFuncione['CategoriasFuncione']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categorias Funcione'), array('action' => 'edit', $categoriasFuncione['CategoriasFuncione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categorias Funcione'), array('action' => 'delete', $categoriasFuncione['CategoriasFuncione']['id']), array(), __('Are you sure you want to delete # %s?', $categoriasFuncione['CategoriasFuncione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias Funciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorias Funcione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
