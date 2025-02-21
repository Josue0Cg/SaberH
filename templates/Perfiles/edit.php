<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Perfile $perfile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $perfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $perfile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Perfiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="perfiles form content">
            <?= $this->Form->create($perfile) ?>
            <fieldset>
                <legend><?= __('Edit Perfile') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
