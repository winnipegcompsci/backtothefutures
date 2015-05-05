<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Futures Index'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="futuresIndexes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('futures_index_id') ?></th>
            <th><?= $this->Paginator->sort('from_currency_id') ?></th>
            <th><?= $this->Paginator->sort('to_currency_id') ?></th>
            <th><?= $this->Paginator->sort('value') ?></th>
            <th><?= $this->Paginator->sort('source_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($futuresIndexes as $futuresIndex): ?>
        <tr>
            <td><?= $this->Number->format($futuresIndex->futures_index_id) ?></td>
            <td><?= $this->Number->format($futuresIndex->from_currency_id) ?></td>
            <td><?= $this->Number->format($futuresIndex->to_currency_id) ?></td>
            <td><?= h($futuresIndex->value) ?></td>
            <td>
                <?= $futuresIndex->has('source') ? $this->Html->link($futuresIndex->source->source_name, ['controller' => 'Sources', 'action' => 'view', $futuresIndex->source->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $futuresIndex->futures_index_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $futuresIndex->futures_index_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $futuresIndex->futures_index_id], ['confirm' => __('Are you sure you want to delete # {0}?', $futuresIndex->futures_index_id)]) ?>
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
