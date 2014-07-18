<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Asociar Usuario'); ?></legend>
        <?php
        echo $this->Form->input('documento');
        ?>
        <input type='password' name='data[Entrada][tarjeta]' />
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
