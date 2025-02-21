<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Registro> $registro
 */
?>
<div class="registro index content">
    <?= $this->Html->link(__('New Registro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registro') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('rol') ?></th>
                    <th><?= $this->Paginator->sort('usuario') ?></th>
                    <th><?= $this->Paginator->sort('contrasena') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registro as $registro): ?>
                <tr>
                    <td><?= $this->Number->format($registro->id) ?></td>
                    <td><?= h($registro->nombre) ?></td>
                    <td><?= h($registro->rol) ?></td>
                    <td><?= h($registro->usuario) ?></td>
                    <td><?= h($registro->contrasena) ?></td>
                    <td><?= h($registro->created) ?></td>
                    <td><?= h($registro->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registro->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>