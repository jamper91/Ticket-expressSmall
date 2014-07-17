<div class="eventos index">
	<h2><?php echo __('Eventos'); ?></h2>
        
        
         <?php foreach ($eventos as $evento): ?>
        <dl>
		<dt><?php echo $this->Paginator->sort('nombre'); ?> </dt>
		<dd>
			<?php echo h($evento['Evento']['nombre']); ?>
			&nbsp;
		</dd>
		<dt> <?php echo $this->Paginator->sort('descripcion'); ?> </dt>
		<dd>
			<?php echo h($evento['Evento']['descripcion']); ?>
			&nbsp;
		</dd>
              
                 <dt> <?php echo $this->Paginator->sort('imagen'); ?> </dt>

                
                <dd>
                    <img src="<?php echo h($evento['Evento']['imagen']);?>">
                   

			&nbsp;
		</dd>
                
                
                <dt class="actions"><?php echo __('¿Te gusta?'); ?></dt>

                
                <dd class="actions">
                   	<?php echo $this->Html->link(__('Comprar'), array('action' => 'comprar', $evento['Evento']['id'])); ?>
			&nbsp;
		</dd>
                
        </dl>
        
        <div style="height: 70px;"></div>
         <?php endforeach; ?>
        
       
        
        
        
        
	
	
</div>