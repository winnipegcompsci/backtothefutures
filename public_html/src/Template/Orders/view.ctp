<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->order_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->order_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['controller' => 'LeverageRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['controller' => 'LeverageRates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Types'), ['controller' => 'OrderTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Type'), ['controller' => 'OrderTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orders view large-10 medium-9 columns">
    <h2><?= h($order->order_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Amount') ?></h6>
            <p><?= h($order->amount) ?></p>
            <h6 class="subheader"><?= __('Contract') ?></h6>
            <p><?= $order->has('contract') ? $this->Html->link($order->contract->contract_id, ['controller' => 'Contracts', 'action' => 'view', $order->contract->contract_id]) : '' ?></p>
            <h6 class="subheader"><?= __('Fee') ?></h6>
            <p><?= h($order->fee) ?></p>
            <h6 class="subheader"><?= __('Leverage Rate') ?></h6>
            <p><?= $order->has('leverage_rate') ? $this->Html->link($order->leverage_rate->leverage_rate_id, ['controller' => 'LeverageRates', 'action' => 'view', $order->leverage_rate->leverage_rate_id]) : '' ?></p>
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= h($order->price) ?></p>
            <h6 class="subheader"><?= __('Price Average') ?></h6>
            <p><?= h($order->price_average) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($order->status) ?></p>
            <h6 class="subheader"><?= __('Symbol') ?></h6>
            <p><?= h($order->symbol) ?></p>
            <h6 class="subheader"><?= __('Order Type') ?></h6>
            <p><?= $order->has('order_type') ? $this->Html->link($order->order_type->order_type_id, ['controller' => 'OrderTypes', 'action' => 'view', $order->order_type->order_type_id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Order Id') ?></h6>
            <p><?= $this->Number->format($order->order_id) ?></p>
            <h6 class="subheader"><?= __('Deal Amount') ?></h6>
            <p><?= $this->Number->format($order->deal_amount) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Create Date') ?></h6>
            <p><?= h($order->create_date) ?></p>
        </div>
    </div>
</div>
