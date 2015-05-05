<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Trade'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="trades index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('trade_id') ?></th>
            <th><?= $this->Paginator->sort('amount') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th><?= $this->Paginator->sort('tid') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($trades as $trade): ?>
        <tr>
            <td><?= $this->Number->format($trade->trade_id) ?></td>
            <td><?= h($trade->amount) ?></td>
            <td><?= h($trade->date) ?></td>
            <td><?= h($trade->price) ?></td>
            <td><?= h($trade->tid) ?></td>
            <td><?= h($trade->type) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $trade->trade_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trade->trade_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trade->trade_id], ['confirm' => __('Are you sure you want to delete # {0}?', $trade->trade_id)]) ?>
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
