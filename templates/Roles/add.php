<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>

<style>
body {
    background: linear-gradient(135deg, #c3cfe2, #dde5f2);
    font-family: 'Trebuchet MS', sans-serif;
}

.roles, form, content {
    background:linear-gradient(135deg,rgb(207, 227, 157),rgb(239, 245, 225) );
}

legend{
    font-weight: bolder;
    font-style: italic;
    font-size: 27px;
}

input[name="nombre"]{
    background: rgb(239, 245, 225);
}
#descripcion{
    background: rgb(239, 245, 225);
}
#estado{
    background: rgb(239, 245, 225);
}

button{
    background: #c3cfe2;
    border-color: rgb(207, 227, 157);
    border-width: 2px;
    color: #515761;
    cursor: pointer; 
    transition: box-shadow 0.3s ease;
}

.button.float-right:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}
</style>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="roles form content">
            <?= $this->Form->create($role) ?>
            <fieldset>
                <legend><?= __('Add Role') ?></legend>
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
