<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Contract Types'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="contractTypes form large-10 medium-9 columns">
    <?= $this->Form->create($contractType); ?>
    <fieldset>
        <legend><?= __('Add Contract Type') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
