<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 * @var \Cake\Collection\CollectionInterface|string[] $rols
 * @var \Cake\Collection\CollectionInterface|string[] $perfils
 */
?>
<style>
body {
    background: linear-gradient(135deg, #c3cfe2, #dde5f2);
    font-family: 'Trebuchet MS', sans-serif;
}

.usuarios, form, content {
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
input[name="email"]{
    background: rgb(239, 245, 225);
}
input[name="password"]{
    background: rgb(239, 245, 225);
}
select[name="rol_id"]{
    background: rgb(239, 245, 225);
}
select[name="perfil_id"]{
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
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Add Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('rol_id', ['options' => $rols]);
                    echo $this->Form->control('perfil_id', ['options' => $perfils]);
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
