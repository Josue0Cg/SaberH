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
            <?= $this->Html->link(__('Edit Perfile'), ['action' => 'edit', $perfile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Perfile'), ['action' => 'delete', $perfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Perfiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Perfile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="perfiles view content">
            <h3><?= h($perfile->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($perfile->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($perfile->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($perfile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($perfile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($perfile->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($perfile->descripcion)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>