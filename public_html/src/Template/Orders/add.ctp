<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['controller' => 'LeverageRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['controller' => 'LeverageRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orders form large-10 medium-9 columns">
    <?= $this->Form->create($order); ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->input('amount');
            echo $this->Form->input('contract_id', ['options' => $contracts, 'empty' => true]);
            echo $this->Form->input('create_date');
            echo $this->Form->input('deal_amount');
            echo $this->Form->input('fee');
            echo $this->Form->input('leverage_rate_id', ['options' => $leverageRates, 'empty' => true]);
            echo $this->Form->input('source_order_id');
            echo $this->Form->input('price');
            echo $this->Form->input('price_average');
            echo $this->Form->input('status');
            echo $this->Form->input('symbol');
            echo $this->Form->input('order_type_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
