<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contract Types'), ['controller' => 'ContractTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract Type'), ['controller' => 'ContractTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fixed Leverage Positions'), ['controller' => 'FixedLeveragePositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixed Leverage Position'), ['controller' => 'FixedLeveragePositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contracts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('contract_name') ?></th>
            <th><?= $this->Paginator->sort('balance') ?></th>
            <th><?= $this->Paginator->sort('available') ?></th>
            <th><?= $this->Paginator->sort('bond') ?></th>
            <th><?= $this->Paginator->sort('source_contract_id') ?></th>
            <th><?= $this->Paginator->sort('contract_type_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contracts as $contract): ?>
        <tr>
            <td><?= $this->Number->format($contract->id) ?></td>
            <td><?= h($contract->contract_name) ?></td>
            <td><?= $this->Number->format($contract->balance) ?></td>
            <td><?= $this->Number->format($contract->available) ?></td>
            <td><?= h($contract->bond) ?></td>
            <td><?= h($contract->source_contract_id) ?></td>
            <td>
                <?= $contract->has('contract_type') ? $this->Html->link($contract->contract_type->contract_type_id, ['controller' => 'ContractTypes', 'action' => 'view', $contract->contract_type->contract_type_id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contract->contract_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contract->contract_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contract->contract_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->contract_id)]) ?>
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
