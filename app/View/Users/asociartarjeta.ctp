<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Asociar Usuario'); ?></legend>
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
        <select name="data[User][tipo_documento]">
            <option value="1">Cedula Ciudadania</option>
            <option value="2">Pasaporte</option>
        </select>
        <?php
        echo $this->Form->input('documento');
        ?>
        <input type='password' name='data[Entrada][tarjeta]' />
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
