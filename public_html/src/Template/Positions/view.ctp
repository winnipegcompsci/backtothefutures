<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Position'), ['action' => 'edit', $position->position_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Position'), ['action' => 'delete', $position->position_id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->position_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['controller' => 'LeverageRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['controller' => 'LeverageRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="positions view large-10 medium-9 columns">
    <h2><?= h($position->position_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Force Liquidation Price') ?></h6>
            <p><?= h($position->force_liquidation_price) ?></p>
            <h6 class="subheader"><?= __('Buy Amount') ?></h6>
            <p><?= h($position->buy_amount) ?></p>
            <h6 class="subheader"><?= __('Buy Available') ?></h6>
            <p><?= h($position->buy_available) ?></p>
            <h6 class="subheader"><?= __('Buy Price Avg') ?></h6>
            <p><?= h($position->buy_price_avg) ?></p>
            <h6 class="subheader"><?= __('Buy Profit Real') ?></h6>
            <p><?= h($position->buy_profit_real) ?></p>
            <h6 class="subheader"><?= __('Contract') ?></h6>
            <p><?= $position->has('contract') ? $this->Html->link($position->contract->contract_id, ['controller' => 'Contracts', 'action' => 'view', $position->contract->contract_id]) : '' ?></p>
            <h6 class="subheader"><?= __('Contract Type') ?></h6>
            <p><?= h($position->contract_type) ?></p>
            <h6 class="subheader"><?= __('Leverage Rate') ?></h6>
            <p><?= $position->has('leverage_rate') ? $this->Html->link($position->leverage_rate->leverage_rate_id, ['controller' => 'LeverageRates', 'action' => 'view', $position->leverage_rate->leverage_rate_id]) : '' ?></p>
            <h6 class="subheader"><?= __('Sell Amount') ?></h6>
            <p><?= h($position->sell_amount) ?></p>
            <h6 class="subheader"><?= __('Sell Available') ?></h6>
            <p><?= h($position->sell_available) ?></p>
            <h6 class="subheader"><?= __('Sell Price Avg') ?></h6>
            <p><?= h($position->sell_price_avg) ?></p>
            <h6 class="subheader"><?= __('Sell Price Real') ?></h6>
            <p><?= h($position->sell_price_real) ?></p>
            <h6 class="subheader"><?= __('Result') ?></h6>
            <p><?= h($position->result) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Position Id') ?></h6>
            <p><?= $this->Number->format($position->position_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($position->date_created) ?></p>
        </div>
    </div>
</div>
