<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InicioSesion $inicioSesion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Inicio Sesion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="inicioSesion form content">
            <?= $this->Form->create($inicioSesion) ?>
            <fieldset>
                <legend><?= __('Add Inicio Sesion') ?></legend>
                <?php
                    echo $this->Form->control('usuario');
                    echo $this->Form->control('contrasena');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
