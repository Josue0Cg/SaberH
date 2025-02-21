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
            <?= $this->Html->link(__('Edit Inicio Sesion'), ['action' => 'edit', $inicioSesion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inicio Sesion'), ['action' => 'delete', $inicioSesion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inicioSesion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inicio Sesion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inicio Sesion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="inicioSesion view content">
            <h3><?= h($inicioSesion->usuario) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($inicioSesion->usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contrasena') ?></th>
                    <td><?= h($inicioSesion->contrasena) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($inicioSesion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($inicioSesion->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($inicioSesion->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>