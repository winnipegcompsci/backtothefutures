<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $depth->depths_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $depth->depths_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Depths'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rates'), ['controller' => 'Rates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rate'), ['controller' => 'Rates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="depths form large-10 medium-9 columns">
    <?= $this->Form->create($depth); ?>
    <fieldset>
        <legend><?= __('Edit Depth') ?></legend>
        <?php
            echo $this->Form->input('id');
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
