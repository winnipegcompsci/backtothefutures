<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['controller' => 'LeverageRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['controller' => 'LeverageRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orders index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('order_id') ?></th>
            <th><?= $this->Paginator->sort('amount') ?></th>
            <th><?= $this->Paginator->sort('contract_id') ?></th>
            <th><?= $this->Paginator->sort('create_date') ?></th>
            <th><?= $this->Paginator->sort('deal_amount') ?></th>
            <th><?= $this->Paginator->sort('fee') ?></th>
            <th><?= $this->Paginator->sort('leverage_rate_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $this->Number->format($order->order_id) ?></td>
            <td><?= h($order->amount) ?></td>
            <td>
                <?= $order->has('contract') ? $this->Html->link($order->contract->contract_id, ['controller' => 'Contracts', 'action' => 'view', $order->contract->contract_id]) : '' ?>
            </td>
            <td><?= h($order->create_date) ?></td>
            <td><?= $this->Number->format($order->deal_amount) ?></td>
            <td><?= h($order->fee) ?></td>
            <td>
                <?= $order->has('leverage_rate') ? $this->Html->link($order->leverage_rate->leverage_rate_id, ['controller' => 'LeverageRates', 'action' => 'view', $order->leverage_rate->leverage_rate_id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $order->order_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->order_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->order_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
