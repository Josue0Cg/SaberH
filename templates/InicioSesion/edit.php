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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inicioSesion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inicioSesion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Inicio Sesion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="inicioSesion form content">
            <?= $this->Form->create($inicioSesion) ?>
            <fieldset>
                <legend><?= __('Edit Inicio Sesion') ?></legend>
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
