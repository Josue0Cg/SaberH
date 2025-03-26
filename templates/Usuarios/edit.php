<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 * @var string[]|\Cake\Collection\CollectionInterface $rols
 * @var string[]|\Cake\Collection\CollectionInterface $perfils
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete Usuario'),
                ['action' => 'delete', $usuario->id],
                [
                    'confirm' => __('Are you sure you want to delete user #{0}?', $usuario->id),
                    'class' => 'side-nav-item btn btn-danger'
                ]
            ) ?>
            <?= $this->Html->link(
                __('Back to List'),
                ['action' => 'index'],
                ['class' => 'side-nav-item btn btn-secondary']
            ) ?>
        </div>
    </aside>

    <div class="column column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuario, ['class' => 'usuario-form']) ?>
            <fieldset>
                <legend><?= __('Edit Usuario') ?></legend>
                <?= $this->Form->control('nombre', [
                    'label' => __('Nombre'),
                    'placeholder' => __('Enter full name'),
                    'required' => true
                ]) ?>
                <?= $this->Form->control('email', [
                    'label' => __('Email'),
                    'type' => 'email',
                    'placeholder' => __('Enter email address'),
                    'required' => true
                ]) ?>
                <?= $this->Form->control('password', [
                    'label' => __('Password'),
                    'type' => 'password',
                    'placeholder' => __('Enter new password'),
                    'autocomplete' => 'new-password'
                ]) ?>
                <?= $this->Form->control('rol_id', [
                    'label' => __('Rol'),
                    'options' => $rols,
                    'empty' => __('Select a role')
                ]) ?>
                <?= $this->Form->control('perfil_id', [
                    'label' => __('Perfil'),
                    'options' => $perfils,
                    'empty' => __('Select a profile')
                ]) ?>
                <?= $this->Form->control('estado', [
                    'label' => __('Estado'),
                    'type' => 'checkbox'
                ]) ?>
            </fieldset>
            <div class="form-actions">
                <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-outline-secondary']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
