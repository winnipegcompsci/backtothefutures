<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Depths'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rates'), ['controller' => 'Rates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rate'), ['controller' => 'Rates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="depths form large-10 medium-9 columns">
    <?= $this->Form->create($depth); ?>
    <fieldset>
        <legend><?= __('Add Depth') ?></legend>
        <?php
            echo $this->Form->input('asks');
            echo $this->Form->input('bids');
            echo $this->Form->input('date');
            echo $this->Form->input('contract_type');
            echo $this->Form->input('rate_id', ['options' => $rates, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
