<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Order Type'), ['action' => 'edit', $orderType->order_type_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Type'), ['action' => 'delete', $orderType->order_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderType->order_type_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
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
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($orderType->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Orders') ?></h4>
    <?php if (!empty($orderType->orders)): ?>
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
        <?php foreach ($orderType->orders as $orders): ?>
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
