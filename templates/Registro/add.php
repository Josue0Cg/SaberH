<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registro $registro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Registro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="registro form content">
            <?= $this->Form->create($registro) ?>
            <fieldset>
                <legend><?= __('Add Registro') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('rol');
                    echo $this->Form->control('usuario');
                    echo $this->Form->control('contrasena');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
