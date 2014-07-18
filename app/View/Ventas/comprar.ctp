<div class="entradas form">

    <?php echo $this->Form->create('Venta'); ?>
    <h2><?php echo __('Comprar'); ?></h2>
    <table>
        <tr>
            <td><?php echo __('Nombre'); ?></td>
            <td>
                <?php echo h($evento['Evento']['nombre']); ?>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td><?php echo __('Descripcion'); ?></td>
            <td>
                <?php echo h($evento['Evento']['descripcion']); ?>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td><?php echo __('Imagen'); ?></td>
            <td>
                <img src="<?php echo h($evento['Evento']['imagen']); ?>">
                &nbsp;
            </td>
        </tr>

            <?php if ($evento['Evento']['tipo_id']) {
            ?>
            <tr>
                <td><?php echo __('Boleta'); ?></td>
                <td>
                    <?php
                    echo '<select name="data[Venta][categoria_id]" id="VentaCategoria">';
                    foreach ($categorias as $categoria) {
                        echo '<option value="' . $categoria['Categoria']['id'] . '" precio="'.$categoria['Categoria']['precio'].'">' . $categoria['Categoria']['nombre'] . '</option>';
                    }
                    echo '</select>';

//                echo $this->Form->input('categoria_id');
                    ?>
                </td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td>Cantidad</td>
            <td>
                <?php
                echo $this->Form->input('cantidad', array(
                    'label' => '',
                    'value' => '0'
                ));
                ?>
            </td>
        </tr>
        <tr>
            <td>Total</td>
            <td>
                <input type="text" id="VentaTotal" value="0" disabled />
            </td>
        </tr>
    </table>
    <input type="text" style="display: none" value="<?php echo $UserId; ?>" name="data[Venta][user_id]"/>
<?php echo $this->Form->end(__('Submit')); ?>


</div>

<script type="text/javascript">
    $(document).ready(function()
    {
        $("#VentaCantidad").keyup(function(){
        
            var precio=$("#VentaCategoria :selected").attr("precio");
            
            var cantidad=$(this).val();
            
            var total=parseInt(cantidad)*parseFloat(precio);
            
            $("#VentaTotal").val(total);
        });
        
        $("#VentaCategoria").change(function(){
        
            var precio=$("#VentaCategoria :selected").attr("precio");
            
            var cantidad=$("#VentaCantidad").val();
            
            var total=parseInt(cantidad)*parseFloat(precio);
            
            $("#VentaTotal").val(total);
        });
    });
</script>