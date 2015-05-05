<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Leverage Rate'), ['action' => 'edit', $leverageRate->leverage_rate_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Leverage Rate'), ['action' => 'delete', $leverageRate->leverage_rate_id], ['confirm' => __('Are you sure you want to delete # {0}?', $leverageRate->leverage_rate_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fixed Leverage Positions'), ['controller' => 'FixedLeveragePositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixed Leverage Position'), ['controller' => 'FixedLeveragePositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leverageRates view large-10 medium-9 columns">
    <h2><?= h($leverageRate->leverage_rate_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Leverage Rate Name') ?></h6>
            <p><?= h($leverageRate->leverage_rate_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($leverageRate->id) ?></p>
            <h6 class="subheader"><?= __('Value') ?></h6>
            <p><?= $this->Number->format($leverageRate->value) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related FixedLeveragePositions') ?></h4>
    <?php if (!empty($leverageRate->fixed_leverage_positions)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Fixed Leverage Position Id') ?></th>
            <th><?= __('Buy Amount') ?></th>
            <th><?= __('Buy Available') ?></th>
            <th><?= __('Buy Bond') ?></th>
            <th><?= __('Buy Flatprice') ?></th>
            <th><?= __('Buy Price Avg') ?></th>
            <th><?= __('Contract Id') ?></th>
            <th><?= __('Contract Type Id') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Sell Amount') ?></th>
            <th><?= __('Sell Available') ?></th>
            <th><?= __('Sell Bond') ?></th>
            <th><?= __('Sell Flatprice') ?></th>
            <th><?= __('Sell Profit Loss Ratio') ?></th>
            <th><?= __('Sell Price Avg') ?></th>
            <th><?= __('Sell Price Real') ?></th>
            <th><?= __('Symbol') ?></th>
            <th><?= __('Leverage Rate Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($leverageRate->fixed_leverage_positions as $fixedLeveragePositions): ?>
        <tr>
            <td><?= h($fixedLeveragePositions->fixed_leverage_position_id) ?></td>
            <td><?= h($fixedLeveragePositions->buy_amount) ?></td>
            <td><?= h($fixedLeveragePositions->buy_available) ?></td>
            <td><?= h($fixedLeveragePositions->buy_bond) ?></td>
            <td><?= h($fixedLeveragePositions->buy_flatprice) ?></td>
            <td><?= h($fixedLeveragePositions->buy_price_avg) ?></td>
            <td><?= h($fixedLeveragePositions->contract_id) ?></td>
            <td><?= h($fixedLeveragePositions->contract_type_id) ?></td>
            <td><?= h($fixedLeveragePositions->date_created) ?></td>
            <td><?= h($fixedLeveragePositions->sell_amount) ?></td>
            <td><?= h($fixedLeveragePositions->sell_available) ?></td>
            <td><?= h($fixedLeveragePositions->sell_bond) ?></td>
            <td><?= h($fixedLeveragePositions->sell_flatprice) ?></td>
            <td><?= h($fixedLeveragePositions->sell_profit_loss_ratio) ?></td>
            <td><?= h($fixedLeveragePositions->sell_price_avg) ?></td>
            <td><?= h($fixedLeveragePositions->sell_price_real) ?></td>
            <td><?= h($fixedLeveragePositions->symbol) ?></td>
            <td><?= h($fixedLeveragePositions->leverage_rate_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'FixedLeveragePositions', 'action' => 'view', $fixedLeveragePositions->fixed_leverage_position_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'FixedLeveragePositions', 'action' => 'edit', $fixedLeveragePositions->fixed_leverage_position_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'FixedLeveragePositions', 'action' => 'delete', $fixedLeveragePositions->fixed_leverage_position_id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixedLeveragePositions->fixed_leverage_position_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Orders') ?></h4>
    <?php if (!empty($leverageRate->orders)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Amount') ?></th>
            <th><?= __('Contract Id') ?></th>
            <th><?= __('Create Date') ?></th>
            <th><?= __('Deal Amount') ?></th>
            <th><?= __('Fee') ?></th>
            <th><?= __('Leverage Rate Id') ?></th>
            <th><?= __('Price') ?></th>
            <th><?= __('Price Average') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Symbol') ?></th>
            <th><?= __('Order Type Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($leverageRate->orders as $orders): ?>
        <tr>
            <td><?= h($orders->id) ?></td>
            <td><?= h($orders->amount) ?></td>
            <td><?= h($orders->contract_id) ?></td>
            <td><?= h($orders->create_date) ?></td>
            <td><?= h($orders->deal_amount) ?></td>
            <td><?= h($orders->fee) ?></td>
            <td><?= h($orders->leverage_rate_id) ?></td>
            <td><?= h($orders->price) ?></td>
            <td><?= h($orders->price_average) ?></td>
            <td><?= h($orders->status) ?></td>
            <td><?= h($orders->symbol) ?></td>
            <td><?= h($orders->order_type_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->order_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->order_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->order_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Positions') ?></h4>
    <?php if (!empty($leverageRate->positions)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Force Liquidation Price') ?></th>
            <th><?= __('Buy Amount') ?></th>
            <th><?= __('Buy Available') ?></th>
            <th><?= __('Buy Price Avg') ?></th>
            <th><?= __('Buy Profit Real') ?></th>
            <th><?= __('Contract Id') ?></th>
            <th><?= __('Contract Type') ?></th>
            <th><?= __('Date Created') ?></th>
            <th><?= __('Leverage Rate Id') ?></th>
            <th><?= __('Sell Amount') ?></th>
            <th><?= __('Sell Available') ?></th>
            <th><?= __('Sell Price Avg') ?></th>
            <th><?= __('Sell Price Real') ?></th>
            <th><?= __('Result') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($leverageRate->positions as $positions): ?>
        <tr>
            <td><?= h($positions->id) ?></td>
            <td><?= h($positions->force_liquidation_price) ?></td>
            <td><?= h($positions->buy_amount) ?></td>
            <td><?= h($positions->buy_available) ?></td>
            <td><?= h($positions->buy_price_avg) ?></td>
            <td><?= h($positions->buy_profit_real) ?></td>
            <td><?= h($positions->contract_id) ?></td>
            <td><?= h($positions->contract_type) ?></td>
            <td><?= h($positions->date_created) ?></td>
            <td><?= h($positions->leverage_rate_id) ?></td>
            <td><?= h($positions->sell_amount) ?></td>
            <td><?= h($positions->sell_available) ?></td>
            <td><?= h($positions->sell_price_avg) ?></td>
            <td><?= h($positions->sell_price_real) ?></td>
            <td><?= h($positions->result) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Positions', 'action' => 'view', $positions->position_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Positions', 'action' => 'edit', $positions->position_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Positions', 'action' => 'delete', $positions->position_id], ['confirm' => __('Are you sure you want to delete # {0}?', $positions->position_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
