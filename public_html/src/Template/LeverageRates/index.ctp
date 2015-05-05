<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Leverage Rate'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="leverageRates index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('leverage_rate_name') ?></th>
            <th><?= $this->Paginator->sort('value') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($leverageRates as $leverageRate): ?>
        <tr>
            <td><?= $this->Number->format($leverageRate->id) ?></td>
            <td><?= h($leverageRate->leverage_rate_name) ?></td>
            <td><?= $this->Number->format($leverageRate->value) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $leverageRate->leverage_rate_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leverageRate->leverage_rate_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leverageRate->leverage_rate_id], ['confirm' => __('Are you sure you want to delete # {0}?', $leverageRate->leverage_rate_id)]) ?>
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
