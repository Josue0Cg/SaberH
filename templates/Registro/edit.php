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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registro->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Registro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="registro form content">
            <?= $this->Form->create($registro) ?>
            <fieldset>
                <legend><?= __('Edit Registro') ?></legend>
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
