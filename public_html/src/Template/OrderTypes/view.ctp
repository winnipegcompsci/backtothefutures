<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Order Type'), ['action' => 'edit', $orderType->order_type_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Type'), ['action' => 'delete', $orderType->order_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderType->order_type_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Type'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orderTypes view large-10 medium-9 columns">
    <h2><?= h($orderType->order_type_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Order Type Name') ?></h6>
            <p><?= h($orderType->order_type_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Order Type Id') ?></h6>
            <p><?= $this->Number->format($orderType->order_type_id) ?></p>
        </div>
    </div>
</div>
