<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rate->rate_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rate->rate_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Depths'), ['controller' => 'Depths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Depth'), ['controller' => 'Depths', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rates form large-10 medium-9 columns">
    <?= $this->Form->create($rate); ?>
    <fieldset>
        <legend><?= __('Edit Rate') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('time');
            echo $this->Form->input('currency_id', ['options' => $currencies, 'empty' => true]);
            echo $this->Form->input('source_id', ['options' => $sources, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
