<div class="entradas form">

    <?php echo $this->Form->create('Entrada'); ?>
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
            <?php if ($evento['Evento']['tipo_id']) {
                ?>
                <dt><?php echo __('Boleta'); ?></dt>
                <dd>
                    <?php
                    echo '<select name="data[Entrada][categoria_id]">';
                    foreach ($categorias as $categoria) {
                        echo '<option value="' . $categoria['Categoria']['id'] . '">' . $categoria['Categoria']['nombre'] . '</option>';
                    }
                    echo '</select>';

//                echo $this->Form->input('categoria_id');
                    ?>
                </dd>
                <?php
            }
            ?>
        </dl>
        <input type="text" style="display: none" value="<?php echo $UserId;?>"/>
        <?php echo $this->Form->end(__('Submit')); ?>


</div>