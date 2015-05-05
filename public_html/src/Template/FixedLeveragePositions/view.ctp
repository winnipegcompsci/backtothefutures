<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Fixed Leverage Position'), ['action' => 'edit', $fixedLeveragePosition->fixed_leverage_position_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fixed Leverage Position'), ['action' => 'delete', $fixedLeveragePosition->fixed_leverage_position_id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixedLeveragePosition->fixed_leverage_position_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fixed Leverage Positions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixed Leverage Position'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contract Types'), ['controller' => 'ContractTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract Type'), ['controller' => 'ContractTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['controller' => 'LeverageRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['controller' => 'LeverageRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fixedLeveragePositions view large-10 medium-9 columns">
    <h2><?= h($fixedLeveragePosition->fixed_leverage_position_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Buy Amount') ?></h6>
            <p><?= h($fixedLeveragePosition->buy_amount) ?></p>
            <h6 class="subheader"><?= __('Buy Available') ?></h6>
            <p><?= h($fixedLeveragePosition->buy_available) ?></p>
            <h6 class="subheader"><?= __('Buy Bond') ?></h6>
            <p><?= h($fixedLeveragePosition->buy_bond) ?></p>
            <h6 class="subheader"><?= __('Buy Flatprice') ?></h6>
            <p><?= h($fixedLeveragePosition->buy_flatprice) ?></p>
            <h6 class="subheader"><?= __('Buy Price Avg') ?></h6>
            <p><?= h($fixedLeveragePosition->buy_price_avg) ?></p>
            <h6 class="subheader"><?= __('Contract') ?></h6>
            <p><?= $fixedLeveragePosition->has('contract') ? $this->Html->link($fixedLeveragePosition->contract->contract_id, ['controller' => 'Contracts', 'action' => 'view', $fixedLeveragePosition->contract->contract_id]) : '' ?></p>
            <h6 class="subheader"><?= __('Contract Type') ?></h6>
            <p><?= $fixedLeveragePosition->has('contract_type') ? $this->Html->link($fixedLeveragePosition->contract_type->contract_type_id, ['controller' => 'ContractTypes', 'action' => 'view', $fixedLeveragePosition->contract_type->contract_type_id]) : '' ?></p>
            <h6 class="subheader"><?= __('Sell Amount') ?></h6>
            <p><?= h($fixedLeveragePosition->sell_amount) ?></p>
            <h6 class="subheader"><?= __('Sell Available') ?></h6>
            <p><?= h($fixedLeveragePosition->sell_available) ?></p>
            <h6 class="subheader"><?= __('Sell Bond') ?></h6>
            <p><?= h($fixedLeveragePosition->sell_bond) ?></p>
            <h6 class="subheader"><?= __('Sell Flatprice') ?></h6>
            <p><?= h($fixedLeveragePosition->sell_flatprice) ?></p>
            <h6 class="subheader"><?= __('Sell Profit Loss Ratio') ?></h6>
            <p><?= h($fixedLeveragePosition->sell_profit_loss_ratio) ?></p>
            <h6 class="subheader"><?= __('Sell Price Avg') ?></h6>
            <p><?= h($fixedLeveragePosition->sell_price_avg) ?></p>
            <h6 class="subheader"><?= __('Sell Price Real') ?></h6>
            <p><?= h($fixedLeveragePosition->sell_price_real) ?></p>
            <h6 class="subheader"><?= __('Symbol') ?></h6>
            <p><?= h($fixedLeveragePosition->symbol) ?></p>
            <h6 class="subheader"><?= __('Leverage Rate') ?></h6>
            <p><?= $fixedLeveragePosition->has('leverage_rate') ? $this->Html->link($fixedLeveragePosition->leverage_rate->leverage_rate_id, ['controller' => 'LeverageRates', 'action' => 'view', $fixedLeveragePosition->leverage_rate->leverage_rate_id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Fixed Leverage Position Id') ?></h6>
            <p><?= $this->Number->format($fixedLeveragePosition->fixed_leverage_position_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($fixedLeveragePosition->date_created) ?></p>
        </div>
    </div>
</div>
