<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contract Type'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="contractTypes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('contract_type_id') ?></th>
            <th><?= $this->Paginator->sort('contract_type_name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contractTypes as $contractType): ?>
        <tr>
            <td><?= $this->Number->format($contractType->contract_type_id) ?></td>
            <td><?= h($contractType->contract_type_name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contractType->contract_type_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contractType->contract_type_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contractType->contract_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractType->contract_type_id)]) ?>
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
