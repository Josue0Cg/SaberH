<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Perfile> $perfiles
 */
?> 
<style>
body {
    background: linear-gradient(135deg, #c3cfe2, #dde5f2);
    font-family: 'Trebuchet MS', sans-serif;
}

.perfiles, index, content {
    background:linear-gradient(135deg,rgb(207, 227, 157),rgb(239, 245, 225) );
}

h3{
    font-weight: bolder;
    font-style: italic;
}

.button.float-right {
    background: #dde5f2;
    border-color: #BEE067;
    color: #515761;
    cursor: pointer; 
    transition: box-shadow 0.3s ease;
}

.button.float-right:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}
</style>
<div class="perfiles index content">
    <?= $this->Html->link(__('New Perfile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Perfiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($perfiles as $perfile): ?>
                <tr>
                    <td><?= $this->Number->format($perfile->id) ?></td>
                    <td><?= h($perfile->nombre) ?></td>
                    <td><?= h($perfile->estado) ?></td>
                    <td><?= h($perfile->created) ?></td>
                    <td><?= h($perfile->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $perfile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perfile->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfile->id)]) ?>
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