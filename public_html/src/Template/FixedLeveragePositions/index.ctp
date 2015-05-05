<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Fixed Leverage Position'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contract Types'), ['controller' => 'ContractTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract Type'), ['controller' => 'ContractTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['controller' => 'LeverageRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['controller' => 'LeverageRates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fixedLeveragePositions index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('fixed_leverage_position_id') ?></th>
            <th><?= $this->Paginator->sort('buy_amount') ?></th>
            <th><?= $this->Paginator->sort('buy_available') ?></th>
            <th><?= $this->Paginator->sort('buy_bond') ?></th>
            <th><?= $this->Paginator->sort('buy_flatprice') ?></th>
            <th><?= $this->Paginator->sort('buy_price_avg') ?></th>
            <th><?= $this->Paginator->sort('contract_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($fixedLeveragePositions as $fixedLeveragePosition): ?>
        <tr>
            <td><?= $this->Number->format($fixedLeveragePosition->fixed_leverage_position_id) ?></td>
            <td><?= h($fixedLeveragePosition->buy_amount) ?></td>
            <td><?= h($fixedLeveragePosition->buy_available) ?></td>
            <td><?= h($fixedLeveragePosition->buy_bond) ?></td>
            <td><?= h($fixedLeveragePosition->buy_flatprice) ?></td>
            <td><?= h($fixedLeveragePosition->buy_price_avg) ?></td>
            <td>
                <?= $fixedLeveragePosition->has('contract') ? $this->Html->link($fixedLeveragePosition->contract->contract_id, ['controller' => 'Contracts', 'action' => 'view', $fixedLeveragePosition->contract->contract_id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $fixedLeveragePosition->fixed_leverage_position_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fixedLeveragePosition->fixed_leverage_position_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fixedLeveragePosition->fixed_leverage_position_id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixedLeveragePosition->fixed_leverage_position_id)]) ?>
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
