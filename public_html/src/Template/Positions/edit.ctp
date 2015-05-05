<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $position->position_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $position->position_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['controller' => 'LeverageRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['controller' => 'LeverageRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="positions form large-10 medium-9 columns">
    <?= $this->Form->create($position); ?>
    <fieldset>
        <legend><?= __('Edit Position') ?></legend>
        <?php
            echo $this->Form->input('force_liquidation_price');
            echo $this->Form->input('buy_amount');
            echo $this->Form->input('buy_available');
            echo $this->Form->input('buy_price_avg');
            echo $this->Form->input('buy_profit_real');
            echo $this->Form->input('contract_id', ['options' => $contracts, 'empty' => true]);
            echo $this->Form->input('contract_type');
            echo $this->Form->input('date_created');
            echo $this->Form->input('leverage_rate_id', ['options' => $leverageRates, 'empty' => true]);
            echo $this->Form->input('sell_amount');
            echo $this->Form->input('sell_available');
            echo $this->Form->input('sell_price_avg');
            echo $this->Form->input('sell_price_real');
            echo $this->Form->input('result');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
