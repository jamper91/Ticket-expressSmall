<div class="eventos index">
	<h2><?php echo __('Eventos'); ?></h2>
        
        
            
        
        
         <?php foreach ($eventos as $evento): ?>
        <table>
            <tr>
		<td><?php echo $this->Paginator->sort('nombre'); ?> </td>
		<td>
			<?php echo h($evento['Evento']['nombre']); ?>
			&nbsp;
		</td>
            </tr>
            <tr>
		<td> <?php echo $this->Paginator->sort('descripcion'); ?> </td>
		<td>
			<?php echo h($evento['Evento']['descripcion']); ?>
			&nbsp;
		</td>
            </tr>
            <tr>
                <td colspan="2"><img src="<?php echo h($evento['Evento']['imagen']);?>"> </td>
            </tr>
            <tr>
                <td><?php echo __('¿Te gusta?'); ?></td>
                <td>
                    <?php echo $this->Html->link(__('Comprar'), array('controller'=>'ventas','action' => 'comprar', $evento['Evento']['id'])); ?>
                </td>
            </tr>    
        </table><br><br><br>
         <?php endforeach; ?>
        
       
        
        
        
        
	
	
</div>