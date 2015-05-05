<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Fixed Leverage Positions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contract Types'), ['controller' => 'ContractTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract Type'), ['controller' => 'ContractTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['controller' => 'LeverageRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['controller' => 'LeverageRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fixedLeveragePositions form large-10 medium-9 columns">
    <?= $this->Form->create($fixedLeveragePosition); ?>
    <fieldset>
        <legend><?= __('Add Fixed Leverage Position') ?></legend>
        <?php
            echo $this->Form->input('buy_amount');
            echo $this->Form->input('buy_available');
            echo $this->Form->input('buy_bond');
            echo $this->Form->input('buy_flatprice');
            echo $this->Form->input('buy_price_avg');
            echo $this->Form->input('contract_id', ['options' => $contracts, 'empty' => true]);
            echo $this->Form->input('contract_type_id', ['options' => $contractTypes, 'empty' => true]);
            echo $this->Form->input('date_created');
            echo $this->Form->input('sell_amount');
            echo $this->Form->input('sell_available');
            echo $this->Form->input('sell_bond');
            echo $this->Form->input('sell_flatprice');
            echo $this->Form->input('sell_profit_loss_ratio');
            echo $this->Form->input('sell_price_avg');
            echo $this->Form->input('sell_price_real');
            echo $this->Form->input('symbol');
            echo $this->Form->input('leverage_rate_id', ['options' => $leverageRates, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
