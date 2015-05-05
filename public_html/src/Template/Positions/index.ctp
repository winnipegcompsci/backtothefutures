<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Position'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['controller' => 'LeverageRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['controller' => 'LeverageRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="positions index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('position_id') ?></th>
            <th><?= $this->Paginator->sort('force_liquidation_price') ?></th>
            <th><?= $this->Paginator->sort('buy_amount') ?></th>
            <th><?= $this->Paginator->sort('buy_available') ?></th>
            <th><?= $this->Paginator->sort('buy_price_avg') ?></th>
            <th><?= $this->Paginator->sort('buy_profit_real') ?></th>
            <th><?= $this->Paginator->sort('contract_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($positions as $position): ?>
        <tr>
            <td><?= $this->Number->format($position->position_id) ?></td>
            <td><?= h($position->force_liquidation_price) ?></td>
            <td><?= h($position->buy_amount) ?></td>
            <td><?= h($position->buy_available) ?></td>
            <td><?= h($position->buy_price_avg) ?></td>
            <td><?= h($position->buy_profit_real) ?></td>
            <td>
                <?= $position->has('contract') ? $this->Html->link($position->contract->contract_id, ['controller' => 'Contracts', 'action' => 'view', $position->contract->contract_id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $position->position_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $position->position_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $position->position_id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->position_id)]) ?>
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
