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
            <?= $this->Html->link(__('Edit Registro'), ['action' => 'edit', $registro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registro'), ['action' => 'delete', $registro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="registro view content">
            <h3><?= h($registro->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($registro->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rol') ?></th>
                    <td><?= h($registro->rol) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($registro->usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contrasena') ?></th>
                    <td><?= h($registro->contrasena) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($registro->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($registro->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>