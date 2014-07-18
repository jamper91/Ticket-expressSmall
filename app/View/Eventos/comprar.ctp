<div class="eventos view">
<h2><?php echo __('Comprar'); ?></h2>
	<dl>
		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen'); ?></dt>
		<dd>
                    <img src="<?php echo h($evento['Evento']['imagen']); ?>">
			&nbsp;
		</dd>
	</dl>
</div>

<?php 


if ($evento['Tipo']['id']  == 1) {
    echo 'Conferencia';
            
} else {
    echo "tipo 2";
}

        
        
        
        ?>